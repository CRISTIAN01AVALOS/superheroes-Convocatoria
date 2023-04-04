<?php

namespace App\Http\Controllers;

use App\RegistroConcursoPA;
use DateTime;
use Exception;
use Illuminate\Database\QueryException;
/*use SoapClient;
use SoapFault;*/
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreFormConcurso;
/*use App\Mail\CorreoFormularioDudas;
use App\Mail\CorreRegistroSuccess;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Mail;*/
use App\Municipio;
use App\Region;
use App\Permission;
use App\Role;
use App\RelJuezEvaluacion;
use App\EvaluacionConcurso;
use App\EstatusSelec;
use App\CatEstatus;
use App\CatEstatusEval;
use App\CatNivel;
use App\User;

use Spatie\Permission\Exceptions\RoleAlreadyExists;

//----------------------------------
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;

class PanelAdminController extends Controller
{   

    function __construct()
    {
        // $this->middleware('permission:ver-administrar', ['only'=>['index']]);
        // $this->middleware('permission:crear-rol', ['only' =>['create', 'store']]);
        // $this->middleware('permission:editar-rol', ['only' =>['edit', 'update']]);
        // $this->middleware('permission:borrar-rol', ['only' =>['destroy']]);
    }
    
    public function index(){
        // return Permission::all();
        $user = auth()->user();
        
        $registros=RegistroConcursoPA::validRol()
        ->join('INSUMOS_DB.cat_municipios', 'cdvs_registro_concurso.id_municipio', '=', 'cat_municipios.id')
        ->join('INSUMOS_DB.cat_regiones', 'cat_regiones.id_Region', '=', 'cat_municipios.id_region')
        ->select('cdvs_registro_concurso.*', 'cat_regiones.Region',
        DB::raw("(SELECT count(*) FROM evaluacion_concurso
                                WHERE evaluacion_concurso.registro_concurso_id = cdvs_registro_concurso.id_registro_concurso) as countEval")
        )
        ->orderBy('cdvs_registro_concurso.id_registro_concurso', 'asc')
        ->get();

        $total_registrados=RegistroConcursoPA::count(); //1=Registrado
        $total_seleccionados=RegistroConcursoPA::where('estatus_id',2)->count(); //2=Seleccionado
        $total_Noseleccionados=RegistroConcursoPA::where('estatus_id',3)->count(); //3=No Seleccionado
        
        if($user->hasRole('Admin_concurso')){ //si es admin
            $total_evaluados=RegistroConcursoPA::where('estatus_eval_id',2)->count(); //2=Evaluado
        }else{ //si es Jurado
            //dd(auth()->user()->id);
            $total_evaluados=EvaluacionConcurso::
            // join('cdvs_registro_concurso', 'evaluacion_concurso.registro_concurso_id', '=', 'cdvs_registro_concurso.id_registro_concurso')
            where('evaluacion_concurso.user_id',auth()->user()->id)->count();
            // ->where('cdvs_registro_concurso.estatus_id',2)
            // ->where('cdvs_registro_concurso.estatus_eval_id',1)->count(); //2=Evaluado
            // $total_evaluados=RegistroConcursoPA::where('estatus_id',2)->where('estatus_eval_id',1)->count(); //2=Evaluado
        }
        
        $estatus_select=EstatusSelec::get(); 
        ///Card Por Evaluar de Jurado
        
        $total_seleccPorEvaluar=RegistroConcursoPA::where('estatus_id',2)->count(); //2=Seleccionado
        $total_seleccionadosd=$total_seleccPorEvaluar-$total_evaluados;  ////total por evaluar  (resta total evaluados menos todos seleccionados)

        $cat_estatus=CatEstatus::get();  ///catalogos
        $cat_estatus_eval=CatEstatusEval::get();  ///catalogos
        $municipios=Municipio::get();  ///catalogos
        $regiones=Region::get();  ///catalogos
        $niveles=CatNivel::where('Id_Nivel',12)->orWhere('Id_Nivel',51)->get();  ///catalogos

        // $b = DB::table('cat_estatus_eval')->where('id_estatus_eval','!=',3)->select('id_estatus_eval AS id_estatus', 'desc_estatus_eval AS desc_estatus');
 
        // $cat_estatus = DB::table('cat_estatus')->union($b)->select('id_estatus', 'desc_estatus')->get();


        //if($user->hasRole('SuperAdmin_concurso')){
        // if($user->hasPermissionTo('ver-administrar')){
            return view('tablaAdmin', compact(
                'registros',
                'total_registrados',
                'total_evaluados',
                'total_seleccionados',
                'total_Noseleccionados',
                'estatus_select',
                'cat_estatus',
                'cat_estatus_eval',
                'municipios',
                'regiones',
                'niveles',
                'total_seleccionadosd',
            ) );
        // }else{
        //     return view('tablaAdmin',  compact(
        //         'registros',
        //     ));
        // }
        

    }

    public function formulario(){
        //return view('pages.dashboard-ecommerce');
        
        //$registros=RegistroConcursoPA::first(); //1=Registrado
        $registros=RegistroConcursoPA::get(); //1=Registrado
        return view('formulario');
        ///return view('dashboardPanel', ['registros' => $registros]);
        
        //return view('tablaAdmin');
    }

    public function evaluarForm($id){
        $user_id= auth()->user()->id;

        // $evaluacion=RelJuezEvaluacion::where('registro_concurso_id',$id)
        // ->where('user_id',$user_id)
        // ->get(); 

        $evaluacion=EvaluacionConcurso::where('registro_concurso_id',$id)
        ->where('user_id',$user_id)
        ->get();

          //dd($evaluacion[0]->registro_concurso_id);

        if (isset($evaluacion[0])) {
            return redirect('concurso-dibujo');
        }else{
            $registro=RegistroConcursoPA::select('*','cat_nivel.Nombre_Nivel')->join('INSUMOS_DB.cat_nivel', 'cdvs_registro_concurso.nivel_id','=','cat_nivel.Id_Nivel')->find($id);
            return view('evaluarForm', ['id' => $id, 'registro' => $registro]);
        }
        // return view('evaluarForm', ['id' => $id]);
    }

    public function evaluarForm2($id){
        $user_id= auth()->user()->id;

        // $evaluacion=RelJuezEvaluacion::where('registro_concurso_id',$id)
        // ->where('user_id',$user_id)
        // ->get(); 

        $evaluacion=EvaluacionConcurso::where('registro_concurso_id',$id)
        ->where('user_id',$user_id)
        ->get();

        // if (isset($evaluacion[0])) {
        //     return redirect('dashboard-ecommerce');
        // }else{
        //     $registro=RegistroConcursoPA::find($id);
        //     return view('evaluarForm', ['id' => $id, 'registro' => $registro]);
        // }

        return response()->json($evaluacion);
    }

    public function evaluarStore(Request $request){
        
        //dd($request->All());
        $user_id=auth()->user()->id;

        $existe = EvaluacionConcurso::where('registro_concurso_id',$request->hId)->get();
        $existeCount = $existe->count();

        if($existeCount==4){
            $estatus_eval_id=2;
        }else{
            $estatus_eval_id=1;
        }

        $sumaPuntaje = $request->rbTecnica + $request->rbRegion + $request->rbPersonaje + $request->rbOriginalidad;

        $sacarPuntaje = RegistroConcursoPA::find($request->hId);

        $total_puntaje = $sacarPuntaje->total_puntaje;
        if($total_puntaje==0){
            $total_puntaje=$sumaPuntaje;
        }else{
            $total_puntaje=$total_puntaje + $sumaPuntaje;
        }

        $existeEval = EvaluacionConcurso::where('registro_concurso_id',$request->hId)->where('user_id',$user_id)->get();
        $existeEValCount = $existeEval->count();

        try {
            if($existeEValCount!=0){
                return redirect('concurso-dibujo')->with('statusExisEval', 'NOK3');
            }else{
                $evaluarD = EvaluacionConcurso::create([
                    'tecnica' => $request->rbTecnica,
                    'repre_region' => $request->rbRegion,
                    'desc_personaje' => $request->rbPersonaje,
                    'originalidad' => $request->rbOriginalidad,
                    'total' => $sumaPuntaje,
                    'registro_concurso_id' => $request->hId,
                    'user_id' => $user_id,
                ]);
    
                if($evaluarD->save()){
                    $cambiarEstatus = RegistroConcursoPA::find($request->hId);
                    $cambiarEstatus->estatus_eval_id = $estatus_eval_id;
                    $cambiarEstatus->total_puntaje = $total_puntaje;
                    
                    if ($cambiarEstatus->save()){ 
                        echo '<script>';
                        echo 'console.log('. json_encode('save') .');';
                        echo '</script>';
    
                        // return view('concurso-dibujo', ['type_message' => 'succes']);
                        return redirect('concurso-dibujo')->with('statusEval', 'OK1');
    
                    }else{
                        echo '<script>';
                        echo 'console.log('. json_encode('no redirect 2') .');';
                        echo '</script>';
                        return redirect('concurso-dibujo')->with('statusErrEst', 'NOK2');
                    }
                }else{
                    echo '<script>';
                        echo 'console.log('. json_encode('no save') .');';
                        echo '</script>';
                    // return redirect('evaluar/'.$request->hId);
                    return redirect('concurso-dibujo')->with('statusErrEval', 'NOK1');
                }
            }
            
        } catch (\Throwable $th) {
            echo '<script>';
            echo 'console.log('. json_encode('catch Throwable') .');';
            echo 'console.log('. json_encode($th) .');';
            echo '</script>';
            // return redirect('evaluar/'.$request->hId);
            return redirect('concurso-dibujo')->with('statusEvalErr', 'OK2');
        }
        // $evaluarD->save();

        
    }

    public function revisarUpdate(Request $request){
        
        //dd($request->All()); 
        if($request->estatus_selec_id=="1"){  //Seleccionar
            $estatus_id=2;
        }else{
            $estatus_id=3;
        }

        $revisarEstatus = RegistroConcursoPA::find($request->hiddenId);

        if($revisarEstatus->estatus_id != 1){
            // return redirect('concurso-dibujo');
            return redirect('concurso-dibujo')->with('statusRevErr', 'NOK1');
            echo '<script>';
            echo 'console.log('. json_encode('Ya esta Revisado') .');';
            echo '</script>';
        }else{
            try {
                //dd( $estatus_id); 
                $revisar = RegistroConcursoPA::find($request->hiddenId);
                $revisar->estatus_id = $estatus_id;
                $revisar->observaciones = $request->observaciones;
                // $revisar->save();
    
                if($revisar->save()){
                    echo '<script>';
                    echo 'console.log('. json_encode('Se reviso') .');';
                    echo '</script>';
                    // return redirect('concurso-dibujo');
                    return redirect('concurso-dibujo')->with('statusRev', 'OK1');
                    
                }else{
                    echo '<script>';
                    echo 'console.log('. json_encode('No se reviso ERROR') .');';
                    echo '</script>';
                    // return redirect('concurso-dibujo');
                    return redirect('concurso-dibujo')->with('statusRevErr', 'NOK2');
                }
            } catch (\Throwable $th) {
                echo '<script>';
                echo 'console.log('. json_encode($th) .');';
                echo '</script>';
                // return redirect('concurso-dibujo');
                return redirect('concurso-dibujo')->with('statusRevErr', 'NOK3');
            }
        }
        
    }

    public function verEvaluacion($id){  // ver evaluacion en general del dibujo o por juez dependiendo el Rol
        //select para mostrar calificacion por juez o de todos los jueces de 1 dibujo
        //dd($id);
        //$evaluacion=DB::table('rel_juez_evaluacion')

        // $evaluacion=RelJuezEvaluacion::validRolJuez()
        // ->join('evaluacion_concurso', 'rel_juez_evaluacion.evaluacion_concurso_id', '=', 'evaluacion_concurso.id_evaluacion_concurso')
        // ->join('INSUMOS_DB.users', 'rel_juez_evaluacion.user_id', '=', 'users.id')
        // ->where('rel_juez_evaluacion.registro_concurso_id', "=", $id)
        // ->select('evaluacion_concurso.id_evaluacion_concurso','users.name', 'evaluacion_concurso.tecnica', 'evaluacion_concurso.repre_region', 'evaluacion_concurso.desc_personaje', 'evaluacion_concurso.originalidad', 'evaluacion_concurso.total')
        // ->get();

        $evaluacion=EvaluacionConcurso::validRolJuez()
        // ->join('evaluacion_concurso', 'rel_juez_evaluacion.evaluacion_concurso_id', '=', 'evaluacion_concurso.id_evaluacion_concurso')
        ->join('INSUMOS_DB.users', 'evaluacion_concurso.user_id', '=', 'users.id')
        ->where('evaluacion_concurso.registro_concurso_id', "=", $id)
        ->select('evaluacion_concurso.id_evaluacion_concurso','users.name', 'evaluacion_concurso.tecnica', 'evaluacion_concurso.repre_region', 'evaluacion_concurso.desc_personaje', 'evaluacion_concurso.originalidad', 'evaluacion_concurso.total')
        ->get();

        return view('verEvaluacion', compact('evaluacion') );
    }

    public function mostrarInfooo( $id){
        $user=auth()->user();
        //dd($id);
        $registro=RegistroConcursoPA::select( '*', DB::raw("(SELECT COUNT(*)
        FROM evaluacion_concurso e
        INNER JOIN  cdvs_registro_concurso r ON r.id_registro_concurso=e.registro_concurso_id
        WHERE e.registro_concurso_id =cdvs_registro_concurso.id_registro_concurso
        AND e.user_id=".$user->id." and r.id_registro_concurso=".$id.") as countJuez"),
        DB::raw("(SELECT COUNT(*)
        FROM evaluacion_concurso e
        INNER JOIN  cdvs_registro_concurso r ON r.id_registro_concurso=e.registro_concurso_id
        WHERE e.registro_concurso_id =cdvs_registro_concurso.id_registro_concurso
        AND e.user_id=".$user->id." and r.id_registro_concurso=".$id.") as countJuez"), 'cat_nivel.Nombre_Nivel')
        // ->join('INSUMOS_DB.cat_centrosdetrabajo', 'cat_centrosdetrabajo.clavecct', '=' ,'cdvs_registro_concurso.cct')->collation('utf8mb4_general_ci')
        // ->join('INSUMOS_DB.cat_nivel', 'cat_centrosdetrabajo.Id_Nivel', '=', 'cat_nivel.Id_Nivel')
        ->join('INSUMOS_DB.cat_nivel', 'cdvs_registro_concurso.nivel_id', '=', 'cat_nivel.Id_Nivel')
        ->find($id);
        //dd($registro);
        return response()->json($registro); 
    }

    public function listado(){
        //return view('pages.dashboard-ecommerce');
        
        //$registros=RegistroConcursoPA::first(); //1=Registrado
        $registros=RegistroConcursoPA::get(); //1=Registrado
        //return view('show', ['registros' => $registros]);
        ///return view('dashboardPanel', ['registros' => $registros]);
        return response()->json(['registros' => $registros]);
        //return view('tablaAdmin');
    }

    // public function filtrarBusqueda(Request $request){

    //     //dd($request);

    //     //$Agenda = Agenda::nombres($nombre)->apellidos($apellido)->paginate(5);
        
    //     $estatus_id = $request->estatus;
    //     $estatus_eval_id = $request->estatus_eval;
    //     $id_municipio = $request->municipio;
    //     $grado = $request->grado;
    //     $nivel = $request->nivel_select;
    //     $region = $request->region_select;

    //     $selectUser=User::join('INSUMOS_DB.model_has_roles','users.id','=','model_has_roles.model_id')
    //     ->join('INSUMOS_DB.roles','roles.id','=','model_has_roles.role_id')
    //     ->where('roles.id',10)
    //     ->select('users.id')
    //     ->orderBy('users.id', 'asc')
    //     ->get();

    //     // for($i=0; i<=$selectUser.length(); i=i+1){ //as $key=>$value
    //     //     var_dump( $selectUser);
    //     //     $resFiltrado=RegistroConcursoPA::validRol()//->validRolUser()
    //     //     ->validEstatus($estatus_id,$estatus_eval_id)
    //     //     ->validEstatusEval($estatus_id,$estatus_eval_id)
    //     //     ->validMunicipio($id_municipio)
    //     //     ->validGrado($grado)
    //     //     ->validRegion($region)
    //     //     ->validNivel($nivel)
    //     //     ->join('INSUMOS_DB.cat_municipios', 'cdvs_registro_concurso.id_municipio', '=', 'cat_municipios.id')
    //     //     ->join('INSUMOS_DB.cat_regiones', 'cat_regiones.id_Region', '=', 'cat_municipios.id_region')
    //     //     ->join('INSUMOS_DB.cat_nivel', 'cdvs_registro_concurso.nivel_id', '=', 'cat_nivel.Id_Nivel')
    //     //     ->select('cdvs_registro_concurso.*', 'cat_regiones.Region', 'cat_nivel.Nombre_Nivel',
    //     //     DB::raw("(SELECT count(*) FROM evaluacion_concurso
    //     //                                 WHERE evaluacion_concurso.registro_concurso_id = cdvs_registro_concurso.id_registro_concurso) as countEval"),

    //     //     DB::raw("(SELECT sum(CASE WHEN e1.user_id = ".$value->id." THEN e1.total END) FROM evaluacion_concurso e1 WHERE e1.registro_concurso_id=cdvs_registro_concurso.id_registro_concurso) AS Juez".$value->id),
    //     //     )
    //     //     ->orderBy('cdvs_registro_concurso.id_registro_concurso', 'asc')
    //     //     ->get();
    //     // }
    //     // dd($resFiltrado);
    //     $resFiltrado=RegistroConcursoPA::validRol()//->validRolUser()
    //         ->validEstatus($estatus_id,$estatus_eval_id)
    //         ->validEstatusEval($estatus_id,$estatus_eval_id)
    //         ->validMunicipio($id_municipio)
    //         ->validGrado($grado)
    //         ->validRegion($region)
    //         ->validNivel($nivel)
    //         ->join('INSUMOS_DB.cat_municipios', 'cdvs_registro_concurso.id_municipio', '=', 'cat_municipios.id')
    //         ->join('INSUMOS_DB.cat_regiones', 'cat_regiones.id_Region', '=', 'cat_municipios.id_region')
    //         ->join('INSUMOS_DB.cat_nivel', 'cdvs_registro_concurso.nivel_id', '=', 'cat_nivel.Id_Nivel')
    //         ->select('cdvs_registro_concurso.*', 'cat_regiones.Region', 'cat_nivel.Nombre_Nivel',
    //         DB::raw("(SELECT count(*) FROM evaluacion_concurso
    //                                     WHERE evaluacion_concurso.registro_concurso_id = cdvs_registro_concurso.id_registro_concurso) as countEval"),
    //         // ,
    //         // DB::raw("(SELECT COUNT(*)
    //         // FROM evaluacion_concurso e
    //         // INNER JOIN  cdvs_registro_concurso r ON r.id_registro_concurso=e.registro_concurso_id
    //         // WHERE e.registro_concurso_id =cdvs_registro_concurso.id_registro_concurso
    //         // AND e.user_id=".$user->id.") as countJuez")
    //         DB::raw("(SELECT sum(CASE WHEN e1.user_id = 35 THEN e1.total END) FROM evaluacion_concurso e1 WHERE e1.registro_concurso_id=cdvs_registro_concurso.id_registro_concurso) AS Juez1"),
    //         DB::raw("(SELECT sum(CASE WHEN e2.user_id = 37 THEN e2.total END) FROM evaluacion_concurso e2 WHERE e2.registro_concurso_id=cdvs_registro_concurso.id_registro_concurso) AS Juez2"),
    //         DB::raw("(SELECT sum(CASE WHEN e3.user_id = 38 THEN e3.total END) FROM evaluacion_concurso e3 WHERE e3.registro_concurso_id=cdvs_registro_concurso.id_registro_concurso) AS Juez3"),
    //         DB::raw("(SELECT sum(CASE WHEN e4.user_id = 39 THEN e4.total END) FROM evaluacion_concurso e4 WHERE e4.registro_concurso_id=cdvs_registro_concurso.id_registro_concurso) AS Juez4"),
    //         DB::raw("(SELECT sum(CASE WHEN e5.user_id = 40 THEN e5.total END) FROM evaluacion_concurso e5 WHERE e5.registro_concurso_id=cdvs_registro_concurso.id_registro_concurso) AS Juez5")
    //         )
    //         ->orderBy('cdvs_registro_concurso.id_registro_concurso', 'asc')
    //         ->get();

    //     // echo '<script>';
    //     // echo "window.open('data:application/vnd.ms-excel,' + encodeURIComponent(". json_encode(registros2) ."))";
    //     // echo 'console.log('. json_encode('no redirect 2') .');';
    //     // echo '</script>';

    //     return response()->json(['resFiltrado' => $resFiltrado]);
    // }

    public function filtrarBusqueda(Request $request){

        //dd($request);
        //$Agenda = Agenda::nombres($nombre)->apellidos($apellido)->paginate(5);
        $user=auth()->user();
        $estatus_id = $request->estatus;
        $estatus_eval_id = $request->estatus_eval;
        $id_municipio = $request->municipio;
        $grado = $request->grado;
        $nivel = $request->nivel;
        $region = $request->region;

        $req = array(
            'id_municipio' => $id_municipio, 
            'grado' => $grado, 
            'region' => $region, 
            'nivel' => $nivel,  
        );

        $selectUser=User::join('INSUMOS_DB.model_has_roles','users.id','=','model_has_roles.model_id')
        ->join('INSUMOS_DB.roles','roles.id','=','model_has_roles.role_id')
        ->where('roles.name','Jurado_concurso')
        ->select('users.id', 'users.name', 'users.apellidos')
        ->orderBy('users.id', 'asc')
        ->get();

        $array_usuarios_data = array();

        for($i=0; $i < count($selectUser); $i++){ //as $key=>$value


            $resFiltrado = RegistroConcursoPA::validRol()//->validRolUser()
            // ->validEstatus($estatus_id,$estatus_eval_id)
            // ->validEstatusEval($estatus_id,$estatus_eval_id)
            // ->validMunicipio($id_municipio)
            // ->validGrado($grado)
            // ->validRegion($region)
            // ->validNivel($nivel)
            ->validEstatus($estatus_id,$estatus_eval_id)
            ->validEstatusEval($estatus_id,$estatus_eval_id)
            ->filtrosAlumnosRegistrados($req)
            ->join('INSUMOS_DB.cat_municipios', 'cdvs_registro_concurso.id_municipio', '=', 'cat_municipios.id')
            ->join('INSUMOS_DB.cat_regiones', 'cat_regiones.id_Region', '=', 'cat_municipios.id_region')
            ->join('INSUMOS_DB.cat_nivel', 'cdvs_registro_concurso.nivel_id', '=', 'cat_nivel.Id_Nivel')
            ->select(DB::raw("(SELECT count(*) FROM evaluacion_concurso
                                        WHERE evaluacion_concurso.registro_concurso_id = cdvs_registro_concurso.id_registro_concurso) as countEval"),

            DB::raw("(SELECT sum(CASE WHEN e1.user_id = ".$selectUser[$i]->id." THEN e1.total END) FROM evaluacion_concurso e1 WHERE e1.registro_concurso_id=cdvs_registro_concurso.id_registro_concurso) AS Juez".$i),
            )
            ->orderBy('cdvs_registro_concurso.id_registro_concurso', 'asc')
            ->get();

            $resFiltrado2 = RegistroConcursoPA::validRol()//->validRolUser()
            ->validEstatus($estatus_id,$estatus_eval_id)
            ->validEstatusEval($estatus_id,$estatus_eval_id)
            ->filtrosAlumnosRegistrados($req)
            // ->validEstatus($estatus_id,$estatus_eval_id)
            // ->validEstatusEval($estatus_id,$estatus_eval_id)
            // ->validMunicipio($id_municipio)
            // ->validGrado($grado)
            // ->validRegion($region)
            // ->validNivel($nivel)
            ->join('INSUMOS_DB.cat_municipios', 'cdvs_registro_concurso.id_municipio', '=', 'cat_municipios.id')
            ->join('INSUMOS_DB.cat_regiones', 'cat_regiones.id_Region', '=', 'cat_municipios.id_region')
            ->join('INSUMOS_DB.cat_nivel', 'cdvs_registro_concurso.nivel_id', '=', 'cat_nivel.Id_Nivel')
            ->select('cdvs_registro_concurso.*', 'cat_regiones.Region', 'cat_nivel.Nombre_Nivel',
            DB::raw("(SELECT count(*) FROM evaluacion_concurso
                                        WHERE evaluacion_concurso.registro_concurso_id = cdvs_registro_concurso.id_registro_concurso) as countEval"),
            DB::raw("(SELECT COUNT(*)
            FROM evaluacion_concurso e
            INNER JOIN  cdvs_registro_concurso r ON r.id_registro_concurso=e.registro_concurso_id
            WHERE e.registro_concurso_id =cdvs_registro_concurso.id_registro_concurso
            AND e.user_id=".$user->id.") as countJuez")
            )
            ->orderBy('cdvs_registro_concurso.id_registro_concurso', 'asc')
            ->get();

            array_push($array_usuarios_data, $resFiltrado);

        }
        
        return response()->json(['resFiltrado' => $array_usuarios_data, 'resFiltrado2' => $resFiltrado2, 'jueces' => $selectUser]);
    }

    public function show(Request $request){
        $user=auth()->user();
        if($user->hasRole('Jurado_concurso')){
            $vRol="J";
        }elseif($user->hasRole('Admin_concurso')){
            $vRol="A";
        }else{
            $vRol="SA";
        }

        $estatus_id = $request->estatus_id;
        $estatus_eval_id = $request->estatus_eval_id;
        $id_municipio = $request->municipio_select;
        $grado = $request->grado_select;
        $nivel = $request->nivel_select;
        $region = $request->region_select;

        //dd($request);

        // if ($request->estatus_id != 0){
        //     // $registros=RegistroConcursoPA::where('estatus_id', $request->estatus_id)->get(); //1=Registrado
        //     $registros=RegistroConcursoPA::validRol()//->validRolUser()
        //     ->validEstatus($estatus_id)
        //     ->validEstatusEval($estatus_eval_id)
        //     ->validMunicipio($id_municipio)
        //     ->validGrado($grado)
        //     ->join('INSUMOS_DB.cat_municipios', 'cdvs_registro_concurso.id_municipio', '=', 'cat_municipios.id')
        //     ->join('INSUMOS_DB.cat_regiones', 'cat_regiones.id_Region', '=', 'cat_municipios.id_region')
        //     ->select('cdvs_registro_concurso.*', 'cat_regiones.Region',
        //     DB::raw("(SELECT count(*) FROM evaluacion_concurso
        //                             WHERE evaluacion_concurso.registro_concurso_id = cdvs_registro_concurso.id_registro_concurso) as countEval")
        //     )
        //     ->orderBy('cdvs_registro_concurso.id_registro_concurso', 'asc')
        //     ->get();
        // }else if ($request->municipio_select != 0){
        //     $registros=RegistroConcursoPA::where('id_municipio', $request->municipio_select)->get(); //1=Registrado
        // }else{
            $req = array(
                'id_municipio' => $id_municipio, 
                'grado' => $grado, 
                'region' => $region, 
                'nivel' => $nivel, 
            );
            $registros=RegistroConcursoPA::validRol()//->validRolUser()
            ->validEstatus($estatus_id,$estatus_eval_id)
            ->validEstatusEval($estatus_id,$estatus_eval_id)
            ->filtrosAlumnosRegistrados($req)
            // ->validMunicipio($id_municipio)
            // ->validGrado($grado)
            // ->validRegion($region)
            // ->validNivel($nivel)
            ->join('INSUMOS_DB.cat_municipios', 'cdvs_registro_concurso.id_municipio', '=', 'cat_municipios.id')
            ->join('INSUMOS_DB.cat_regiones', 'cat_regiones.id_Region', '=', 'cat_municipios.id_region')
            ->select('cdvs_registro_concurso.*', 'cat_regiones.Region',
            DB::raw("(SELECT count(*) FROM evaluacion_concurso
                                        WHERE evaluacion_concurso.registro_concurso_id = cdvs_registro_concurso.id_registro_concurso) as countEval")
            ,
            DB::raw("(SELECT COUNT(*)
            FROM evaluacion_concurso e
            INNER JOIN  cdvs_registro_concurso r ON r.id_registro_concurso=e.registro_concurso_id
            WHERE e.registro_concurso_id =cdvs_registro_concurso.id_registro_concurso
            AND e.user_id=".$user->id.") as countJuez")
            )
            ->orderBy('cdvs_registro_concurso.id_registro_concurso', 'asc')
            ->get();

            // return $req;
            //dd($registros);
            
            $evaluacion=EvaluacionConcurso::where('user_id',$user->id)->get();

            //dd($evaluacion);

        return response()->json([$registros, $evaluacion, 'vRol'=>$vRol]);
    }

    public function showMunicipios($idreg){
        // dd($request);

        if($idreg==0){
            $municipios=Municipio::get();
        }else{
            $municipios=Municipio::where('id_region',$idreg )->get();
        }
        // $municipios=Municipio::where('id_region',$idreg )->get();
        // dd($municipios);
        return response()->json([$municipios]);
     }

     public function showRegiones($idreg){
        // $municipios=Municipio::select('id', 'id_region')->get();
        $municipios=Municipio::select('id', 'id_region')->find($idreg);
        // dd($municipios);

        return response()->json([$municipios]);
     }
    
}
