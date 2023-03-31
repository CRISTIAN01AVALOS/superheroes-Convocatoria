<?php

namespace App\Http\Controllers;

use App\RegistroConcurso;
use DateTime;
use Exception;
use Illuminate\Database\QueryException;
use SoapClient;
use SoapFault;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreFormConcurso;
use App\Mail\CorreoFormularioDudas;
use App\Mail\CorreRegistroSuccess;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    // //ecommerce
    // public function dashboardEcommerce(){
    //     return view('pages.dashboard-ecommerce');
    // }
    // // analystic
    // public function dashboardAnalytics(){
    //     return view('pages.dashboard-analytics');
    // }

    public function inicioCon(){
        return view('inicio');
    }

    public function basesConcurso(){
        return view('bases_concurso');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function guardarRegistro(StoreFormConcurso $request){

        // dd($request->nivel_id);
        if($request->hasFile("getFileDibujo")){

                $registro = new RegistroConcurso($request->all());
                $registro->save();
                $fecha_registro = new DateTime(date("Y-m-d"));
                $idConCeros = str_pad($registro->id_registro_concurso, 4, "0", STR_PAD_LEFT);
                $registro->folio = $fecha_registro->format("y")."-CD-".$idConCeros;
                $registro->update();

            try {

                $file=$request->file("getFileDibujo");
                $nombre = "dibujo-".$registro->id_registro_concurso.".".$file->guessExtension();
    
                $ruta = public_path("dibujos_de_alumnos/".$nombre);
    
                if($file->guessExtension()=="jpg" || $file->guessExtension()=="png" || $file->guessExtension()=="jpeg"){
                
                    copy($file, $ruta);

                    $fecha_registro = new DateTime(date("Y-m-d"));
                    $update_registro = RegistroConcurso::find($registro->id_registro_concurso);
                    $update_registro->url_archivo_dibujo = $nombre;

                    try {

                        $update_registro->update();

                        Mail::to($request['correo_titular'])->send(new CorreRegistroSuccess(
                            $registro
                        ));

                        return redirect('/')->with('registro', 'Ok');

                    } catch (QueryException  $e) {
                        echo '<script>';
                        echo 'console.log('. json_encode( $e ) .');';
                        echo '</script>';
                        return redirect('/')->with('registro', 'imagenFormatoNo');
                        // return redirect('/')->with('message-fail', $e->getMessage());
                    }
                    
                }

            } catch (QueryException $e) {
                echo '<script>';
                echo 'console.log('. json_encode( $e ) .');';
                echo '</script>';
                return redirect('/')->with('registro', 'No');
            }
        }else{
            return redirect('/')->with('registro', 'imagenNo');
        }

    }

    
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function actualizarRegistro(Request $request){

        echo '<script>';
        echo 'console.log('. json_encode( $request['idRegistro'] ) .');';
        echo 'console.log('. json_encode( $request['urlRegistro'] ) .');';
        echo '</script>';

        if($request->hasFile("getFileDibujoUpdate")){

            $file=$request->file("getFileDibujoUpdate");
            $nombre = $request['urlRegistro'];

            $ruta = public_path("dibujos_de_alumnos/".$nombre);

            if($file->guessExtension()=="jpg" || $file->guessExtension()=="png" || $file->guessExtension()=="jpeg"){
            
                copy($file, $ruta);

                $update_registro = RegistroConcurso::find($request['idRegistro']);
                $update_registro->url_archivo_dibujo = $nombre;

                try {

                    $update_registro->update();
                    return redirect('/')->with('registro', 'updateOk');

                } catch (QueryException  $e) {
                    echo '<script>';
                    echo 'console.log('. json_encode( $e ) .');';
                    echo '</script>';
                    return redirect('/')->with('registro', 'imagenFormatoNo');
                }
                
            }

        }else{
            return redirect('/')->with('registro', 'imagenNo');
        }

    }

    public function buscarAlumno(Request $request){

        $arrayData = array();
        $aux = 1;
        $buscar_alumno = RegistroConcurso::where('curp', $request['curpAlumno'])->get();
        array_push($arrayData, json_decode($aux, true), json_decode($buscar_alumno, true));

        if (count($buscar_alumno) > 0) {
            return $arrayData;
        } else {
            return 0;
        }
 
    }

    // ------------- enviar formulario de dudas y preguntas
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function enviarFomurlarioDudas(Request $request){

        $request->validate([
            'nombrePregunta'            => 'required',
            'mensajePregunta'            => 'required',
        ]);

        $infoDudas = new \stdClass();
        $infoDudas->nombrePregunta = $request['nombrePregunta'];
        $infoDudas->mensajePregunta = $request['mensajePregunta'];
        $infoDudas->correoPregunta = $request['correoPregunta'];
        
        Mail::to('consultadibujaunsuperheroe@set.edu.mx')->send(new CorreoFormularioDudas(
            $infoDudas
        ));

        return redirect('/')->with('enviarDudas', 'Ok');         

    }

    public function search(Request $request){

        $servicio = 'https://escolares-siie.tamaulipas.gob.mx/Datos_Alumno_WS/ws.asmx?WSDL';
        # HEVJ140414HTSRZNA0    HEVD111120MTSRLNA6  AAHG131014MTSLRNA1  AAHK160724MNELRRA1 
        $parametros = array(
                        'CURP' => strtoupper($request->input('valor')),
                        'Id_Valor' => 1,
                        'Cadena' => 'Efd$21giR24'
                    );

        $res = array(
            'error'         => 1,
            'mensaje'       => 'Curp no encontrada',
            'CURP'          => '',
            'AluNombre'       => '',
            'AluApePat'     => '',
            'AluApeMat'     => '', 
            'AluSexo'          => '',
            'Clavecct'   => '',
            'nombrect'   => '',
            'Grado'   => '',
            'Grupo'   => '',
            'Desc_Turno'   => '',
            'MATUTINO'   => '',
            'Estatus'   => '',
            'Ciclo_Escolar'  => ''
        );

        try {
            
            $client         = new SoapClient($servicio);
            $result         = $client->BuscaAlumno_PorCurp_CETE($parametros);
            $xml            = $result->BuscaAlumno_PorCurp_CETEResult;
            
            // echo json_encode( $result );

            if(strlen($xml) == 1871) {

                return  $res;

            } else {
                
                $arrayData = array();

                $xml        = str_replace(array('diffgr:', 'msdata:'), '', $xml);
                $xml        = '<package>'.$xml.'</package>';
                $data       = simplexml_load_string($xml);

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://proyectoscete.tamaulipas.gob.mx/insumos/public/municipio-cct/'.json_decode($data, true)[0]['Clavecct']); 
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
                curl_setopt($ch, CURLOPT_HEADER, 0); 
                $data_municipio = curl_exec($ch); 
                curl_close($ch);
                array_push($arrayData, json_decode($data, true), json_decode($data_municipio, true));
                return $arrayData;

            }
            

        } catch(SoapFault $fault){
                    
            return  $res;

        }


    }

    public function searchTest(Request $request){

        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, 'https://proyectoscete.tamaulipas.gob.mx/insumos/public/servicios/'); 
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        // curl_setopt($ch, CURLOPT_HEADER, 0); 
        // $data_municipio = curl_exec($ch); 
        // curl_close($ch);
        // return json_decode($data_municipio, true);

        // $fields = array('param0' => 'UUIDcase234d', 'param1' => 'HEVJ140414HTSRZNA0');
        // $fields_string = http_build_query($fields);

        // $fieldsHeaders = array('usuario' => 'rhcete', 'contrasenia' => urlencode('P4$$W0rdrhc3te'), 'Content-Type' => 'application/x-www-form-urlencoded');
        // $fields_string_Headers = http_build_query($fieldsHeaders);

        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, "https://proyectoscete.tamaulipas.gob.mx/insumos/public/servicios/");
        // curl_setopt($ch, CURLOPT_POST, 1);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string );
        // curl_setopt($ch, CURLOPT_HEADER, $fields_string_Headers); 
        // $data = curl_exec($ch);
        // curl_close($ch);
        // return json_decode($data, true);
    }

}
