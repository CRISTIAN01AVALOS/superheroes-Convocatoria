<!DOCTYPE html>
<html lang="es" class="light-style customizer-hide layout-menu-fixed layout-navbar-fixed" dir="ltr" data-theme="theme-semi-dark">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>Concurso de dibujo - Secretaría de Educación</title>

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/assets/img/favicon/favicon.ico">-->
    
    <!-- Core CSS -->
    
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>

    <!-- <link rel="stylesheet" type="text/css" href="./login_nuevo_files/vendors/css/vendors.min.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/vendors.min.css') }}">

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/assets/img/favicon/favicon.ico"> -->
    <link rel="apple-touch-icon" href="{{asset('images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.tamaulipas.gob.mx/educacion/wp-content/uploads/sites/3/2022/10/cropped-escudo-tam-dorado-32x32.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <!-- <link href="./login_nuevo_files/css2" rel="stylesheet"> -->
    <link href="{{ asset('css/cssLogin/css2.css') }}" rel="stylesheet">

    <!-- Core CSS -->
    
    <!-- <link rel="stylesheet" href="./login_nuevo_files/demo.css"> -->
    <link rel="stylesheet" href="{{ asset('css/cssLogin/demo.css') }}">

    <!-- Vendors CSS -->
    <!-- <link rel="stylesheet" href="./login_nuevo_files/perfect-scrollbar.css">
    <link rel="stylesheet" href="./login_nuevo_files/typeahead.css"> -->
    <link rel="stylesheet" href="{{ asset('css/cssLogin/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cssLogin/typeahead.css') }}">

    <style>

      @font-face {
          font-family: "Droid Sans";
          src: url('http://fonts.googleapis.com/css?family=Droid+Sans') format("truetype");
            }
            body {
              font-family: "Droid Sans";
      }

      html *
      {
        font-family: "Droid Sans" !important;
      }

      .colorGuindo{
        background: #842332;
      }

      .colorText{
        color: white;
      }

      .logoSet{
        position: absolute;
        top: 0px;
        left: 0px;
        vertical-align: top;
        text-align: left;
      }

      .borderrr{
        background: #842332;

        min-height: 100%;
        height: 100%;
        /* margin-left: auto !important; */

        /* margin-right: 0px !important; */
        /* margin-left: 0px !important; */
        /* margin-top: 40px !important; */
        /* margin-bottom: 40px !important; */
      }

      .otro{
        position: fixed;
  
        /* float: right; */
        /* border: solid black 5px; */
        border-radius: 0 0 0 7%;
        border-bottom: 7px solid #c0945c;
        background: white;
        padding-right: 40px !important;
        padding-left: 40px !important;
        padding-top: 40px !important;
        padding-bottom: 30% !important;
  
        min-height: 85%;
        height: 85%;
        /* height: auto !important; */
        width: 32.6%;
        min-width: 32.6%;
      }
    </style>

    <!-- Page CSS -->
    <!-- Page -->
    <!-- <link rel="stylesheet" href="./login_nuevo_files/page-auth.css"> -->
    <link rel="stylesheet" href="{{ asset('css/cssLogin/page-auth.css') }}">
    
    <!-- <link rel="stylesheet" type="text/css" href="./login_nuevo_files/core.css"
    class="template-customizer-core-css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cssLogin/core.css') }}"
    class="template-customizer-core-css">
    
    <!-- <link rel="stylesheet" type="text/css" href="./login_nuevo_files/theme-semi-dark.css"
    class="template-customizer-theme-css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cssLogin/theme-semi-dark.css') }}"
    class="template-customizer-theme-css">
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

</head>

<body>

  <!-- Content -->

<div class="authentication-wrapper authentication-cover">
  <div class="authentication-inner row m-0">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center colorGuindo">


      <img src="{{ asset('images/logo/logoSet.png') }}"
      alt="Auth Cover Bg color" width="520"
      class=" logoSet" data-app-light-img="pages/login-light.png"
      data-app-dark-img="pages/login-dark.png">
      
      <div class="flex-row text-center mx-auto">

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <!-- <img src="./login_nuevo_files/imagen-prueba.png" -->
              <img src="{{ asset('images/logo/imagen-prueba.png') }}"
                class="img-fluid authentication-cover-img d-block" width="730" >
            </div>
            <div class="carousel-item">
              <!-- <img src="./login_nuevo_files/imagen-prueba2.png" -->
              <img src="{{ asset('images/logo/imagen-prueba2.png') }}"
              class="img-fluid authentication-cover-img d-block" width="730" >
              
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
 
        <div class="mx-auto">
          <!-- <h3>Discover the powerful admin template 🥳</h3> -->
          <p class="colorText">
            Lorem ipsum dolor sit amet. Et fuga mollitia qui tempora incidunt non esse amet.
            <br> Aut quia maiores quo quisquam fugiat aut atque autem ad Quis amet est vero voluptate.
          </p>
        </div>
      </div>
    </div>
    <!-- /Left Text -->

    <!-- Login -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 pr-4 borderrr ">
    <!-- <div class="d-flex col-12 col-lg-5 col-xl-4 authentication-bg p-sm-5 p-4 borderrr"> -->
      <div class="mx-auto otro ">

        <center>
          <!-- <img src="./login_nuevo_files/tam.png" -->
          <img src="{{ asset('images/logo/tam.png') }}"
          alt="Auth Cover Bg color" width="200"
          class=" img-fluid authentication-cover-img">
        </center>

        <!-- /Logo -->
        <center>
          <h4 class="mb-2">Bienvenido</h4>
          <p class="mb-4">Ingresa tus datos para acceder</p>
        </center>

        <!-- <form id="formAuthentication" class="mb-3 fv-plugins-bootstrap5 fv-plugins-framework" action="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/vertical-menu-template-semi-dark/index.html" method="POST" novalidate="novalidate"> -->
        <form id="formAuthentication" class="mb-3 fv-plugins-bootstrap5 fv-plugins-framework" action="{{ route('login') }}" method="POST" novalidate="novalidate">
          @csrf
          <div class="mb-3 fv-plugins-icon-container">
            
            <div class="input-group">
              <div class="input-group-prepend ">
                <span class="input-group-text" >
                  <i class="bx bxs-user-circle mb-1 mt-1"></i>
                  <!-- <i class="bx bxs-user-circle bx-sm"></i> -->
                </span>
              </div>

                 <input type="text" class="form-control" id="email" name="email" placeholder="Correo" required>
                <!-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo"> -->

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

          </div>

          <div class="mb-3 fv-plugins-icon-container">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" >
                  <i class="bx bxs-lock  mb-1 mt-1"></i>
                  <!-- <i class="bx bxs-lock bx-sm"></i> -->
                </span>
              </div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" required>
                <!-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña"> -->

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          
          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember-me">
              <!-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> -->
              <label class="form-check-label" for="remember">
                Recuerdame
              </label>
            </div>
          </div>

          <center>
            <button class="btn btn-primary" type="submit"> 
              Acceder
            </button>
          </center>

        </form>

        <!-- <p class="text-center">
          <span>New on our platform?</span>
          <a href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/vertical-menu-template-semi-dark/auth-register-cover.html">
            <span>Create an account</span>
          </a>
        </p> -->

        <div class="divider my-4">
          <!-- <div class="divider-text">or</div> -->
        </div>

        <!-- <div class="d-flex justify-content-center">
          <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
            <i class="tf-icons bx bxl-facebook"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
            <i class="tf-icons bx bxl-google-plus"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon btn-label-twitter">
            <i class="tf-icons bx bxl-twitter"></i>
          </a>
        </div> -->
      </div>
    </div>
    <!-- /Login -->
  </div>
</div>

<!-- / Content -->


  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <!-- <script src="./login_nuevo_files/jquery.js"></script>
  <script src="./login_nuevo_files/popper.js"></script>
  <script src="./login_nuevo_files/bootstrap.js"></script> -->
  <script src="{{ asset('js/jsLogin/jquery.js') }}"></script>
  <script src="{{ asset('js/jsLogin/popper.js') }}"></script>
  <script src="{{ asset('js/jsLogin/bootstrap.js') }}"></script>

  
  <!-- <script src="./login_nuevo_files/menu.js"></script> -->
  <script src="{{ asset('js/jsLogin/menu.js') }}"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <!-- <script src="./login_nuevo_files/FormValidation.min.js"></script>
  <script src="./login_nuevo_files/Bootstrap5.min.js"></script> -->
  <script src="{{ asset('js/jsLogin/FormValidation.min.js') }}"></script>
  <script src="{{ asset('js/jsLogin/Bootstrap5.min.js') }}"></script>


  </body>
</html>

@section('page-scripts')

<script src="{{ asset('js/scripts/modal/components-modal.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  /*var input1 = document.getElementById('telefono_titular');

  input1.addEventListener('input', function () {
    if (this.value.length > 10)
      this.value = this.value.slice(0, 10);
  })*/

</script>

<script>

  // -------------------- validación de imagen para el formulario de registro 
  function validarLogin(){
    
    var correo = document.getElementById("correo");
    var contrasenia = document.getElementById("contrasenia");
      
    if(correo==''){
      const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              }
            })

            Toast.fire({
              icon: 'error',
              title: 'Correo vacio'
            })
    }
    if(contrasenia==''){
      alert('contraseña vacia');
    }
  }

</script>