@extends('layouts.contentLayoutMaster')

<!DOCTYPE html>
<!-- saved from url=(0133)https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/vertical-menu-template-semi-dark/auth-login-cover.html -->
<html lang="en" class="light-style customizer-hide layout-menu-fixed layout-navbar-fixed" dir="ltr" data-theme="theme-semi-dark" data-assets-path="../../assets/" data-template="vertical-menu-template-semi-dark"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>Login Cover - Pages | Frest - Bootstrap Admin Template</title>
    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5">
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 admin, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/frest_admin">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/assets/img/favicon/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="./login_nuevo_files/css2" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="./login_nuevo_files/boxicons.css">
    <link rel="stylesheet" href="./login_nuevo_files/fontawesome.css">
    <link rel="stylesheet" href="./login_nuevo_files/flag-icons.css">

    <!-- Core CSS -->
    
    
    <link rel="stylesheet" href="./login_nuevo_files/demo.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./login_nuevo_files/perfect-scrollbar.css">
    <link rel="stylesheet" href="./login_nuevo_files/typeahead.css">
    <!-- Vendor -->
<link rel="stylesheet" href="./login_nuevo_files/formValidation.min.css">

    <!-- Page CSS -->
    <!-- Page -->
<link rel="stylesheet" href="./login_nuevo_files/page-auth.css">
    <!-- Helpers -->
    <script src="./login_nuevo_files/helpers.js"></script><style type="text/css">
.layout-menu-fixed .layout-navbar-full .layout-menu,
.layout-menu-fixed-offcanvas .layout-navbar-full .layout-menu {
  top: 0px !important;
}
.layout-page {
  padding-top: 0px !important;
}
.content-wrapper {
  padding-bottom: 0px !important;
}</style>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="./login_nuevo_files/template-customizer.js"></script><style>#template-customizer{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol" !important;font-size:inherit !important;position:fixed;top:0;right:0;height:100%;z-index:99999999;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;width:360px;background:#fff;-webkit-box-shadow:0 0 20px 0 rgba(0,0,0,.2);box-shadow:0 0 20px 0 rgba(0,0,0,.2);-webkit-transition:all .2s ease-in;-o-transition:all .2s ease-in;transition:all .2s ease-in;-webkit-transform:translateX(380px);-ms-transform:translateX(380px);transform:translateX(380px)}#template-customizer h5{position:relative;font-size:11px;font-weight:600}#template-customizer>h5{flex:0 0 auto}#template-customizer .disabled{color:#d1d2d3 !important}#template-customizer.template-customizer-open{-webkit-transition-delay:.1s;-o-transition-delay:.1s;transition-delay:.1s;-webkit-transform:none !important;-ms-transform:none !important;transform:none !important}#template-customizer .template-customizer-open-btn{position:absolute;top:180px;left:0;z-index:-1;display:block;width:42px;height:42px;border-top-left-radius:15%;border-bottom-left-radius:15%;background:#333;color:#fff !important;text-align:center;font-size:18px !important;line-height:42px;opacity:1;-webkit-transition:all .1s linear .2s;-o-transition:all .1s linear .2s;transition:all .1s linear .2s;-webkit-transform:translateX(-62px);-ms-transform:translateX(-62px);transform:translateX(-62px)}@media(max-width: 991.98px){#template-customizer .template-customizer-open-btn{top:145px}}.dark-style #template-customizer .template-customizer-open-btn{background:#555}#template-customizer .template-customizer-open-btn::before{content:"";width:22px;height:22px;display:block;background-size:100% 100%;position:absolute;background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAABClJREFUaEPtmY1RFEEQhbsjUCIQIhAiUCNQIxAiECIQIxAiECIAIpAMhAiECIQI2vquZqnZvp6fhb3SK5mqq6Ju92b69bzXf6is+dI1t1+eAfztG5z1BsxsU0S+ici2iPB3vm5E5EpEDlSVv2dZswFIxv8UkZcNy+5EZGcuEHMCOBeR951uvVDVD53vVl+bE8DvDu8Pxtyo6ta/BsByg1R15Bwzqz5/LJgn34CZwfnPInI4BUB6/1hV0cSjVxcAM4PbcBZjL0XklIPN7Is3fLCkdQPpPYw/VNXj5IhPIvJWRIhSl6p60ULWBGBm30Vk123EwRxCuIzWkkjNrCZywith10ewE1Xdq4GoAjCz/RTXW44Ynt+LyBEfT43kYfbj86J3w5Q32DNcRQDpwF+dkQXDMey8xem0L3TEqB4g3PZWad8agBMRgZPeu96D1/C2Zbh3X0p80Op1xxloztN48bMQQNoc7+eLEuAoPSPiIDY4Ooo+E6ixeNXM+D3GERz2U3CIqMstLJUgJQDe+7eq6mub0NYEkLAKwEHkiBQDCZtddZCZ8d6r7JDwFkoARklHRPZUFVDVZWbwGuNrC4EfdOzFrRABh3Wnqhv+d70AEBLGFROPmeHlnM81G69UdSd6IUuM0GgUVn1uqWmg5EmMfBeEyB7Pe3txBkY+rGT8j0J+WXq/BgDkUCaqLgEAnwcRog0veMIqFAAwCy2wnw+bI2GaGboBgF9k5N0o0rUSGUb4eO0BeO9j/GYhkSHMHMTIqwGARX6p6a+nlPBl8kZuXMD9j6pKfF9aZuaFOdJCEL5D4eYb9wCYVCanrBmGyii/tIq+SLj/HQBCaM5bLzwfPqdQ6FpVHyra4IbuVbXaY7dETC2ESPNNWiIOi69CcdgSMXsh4tNSUiklMgwmC0aNd08Y5WAES6HHehM4gu97wyhBgWpgqXsrASglprDy7CwhehMZOSbK6JMSma+Fio1KltCmlBIj7gfZOGx8ppQSXrhzFnOhJ/31BDkjFHRvOd09x0mRBA9SFgxUgHpQg0q0t5ymPMlL+EnldFTfDA0NAmf+OTQ0X0sRouf7NNkYGhrOYNrxtIaGg83MNzVDSe3LXLhP7O/yrCsCz1zlWTpjWkuZAOBpX3yVnLqI1yLCOKU6qMrmP7SSrUEw54XF4WBIK5FxCMOr3lVsfGqNSmPzBXUnJTIX1jyVBq9wO6UObOpgC5GjO98vFKnTdQMZXxEsWZlDiCZMIxAbNxQOqlpVZtobejBaZNoBnRDzMFpkxvTQOD36BlrcySZuI6p1ACB6LU3wWuf5581+oHfD1vi89bz3nFUC8Nm7ZlP3nKkFbM4bWPt/MSFwklprYItwt6cmvpWJ2IVcQBCz6bLysSCv3SaANCiTsnaNRrNRqMXVVT1/BrAqz/buu/Y38Ad3KC5PARej0QAAAABJRU5ErkJggg==);margin:10px}.customizer-hide #template-customizer .template-customizer-open-btn{display:none}[dir=rtl] #template-customizer .template-customizer-open-btn{border-radius:0;border-top-right-radius:15%;border-bottom-right-radius:15%}[dir=rtl] #template-customizer .template-customizer-open-btn::before{margin-left:-2px}#template-customizer.template-customizer-open .template-customizer-open-btn{opacity:0;-webkit-transition-delay:0s;-o-transition-delay:0s;transition-delay:0s;-webkit-transform:none !important;-ms-transform:none !important;transform:none !important}#template-customizer .template-customizer-close-btn{position:absolute;top:32px;right:0;display:block;font-size:20px;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}#template-customizer .template-customizer-inner{position:relative;overflow:auto;-webkit-box-flex:0;-ms-flex:0 1 auto;flex:0 1 auto;opacity:1;-webkit-transition:opacity .2s;-o-transition:opacity .2s;transition:opacity .2s}#template-customizer .template-customizer-inner>div:first-child>hr:first-of-type{display:none !important}#template-customizer .template-customizer-inner>div:first-child>h5:first-of-type{padding-top:0 !important}#template-customizer .template-customizer-themes-inner{position:relative;opacity:1;-webkit-transition:opacity .2s;-o-transition:opacity .2s;transition:opacity .2s}#template-customizer .template-customizer-theme-item{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;align-items:center;-ms-flex-align:center;-webkit-box-flex:1;-ms-flex:1 1 100%;flex:1 1 100%;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;margin-bottom:10px;padding:0 24px;width:100%;cursor:pointer}#template-customizer .template-customizer-theme-item input{position:absolute;z-index:-1;opacity:0}#template-customizer .template-customizer-theme-item input~span{opacity:.25;-webkit-transition:all .2s;-o-transition:all .2s;transition:all .2s}#template-customizer .template-customizer-theme-item .template-customizer-theme-checkmark{display:inline-block;width:6px;height:12px;border-right:1px solid;border-bottom:1px solid;opacity:0;-webkit-transition:all .2s;-o-transition:all .2s;transition:all .2s;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}[dir=rtl] #template-customizer .template-customizer-theme-item .template-customizer-theme-checkmark{border-right:none;border-left:1px solid;-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg)}#template-customizer .template-customizer-theme-item input:checked:not([disabled])~span,#template-customizer .template-customizer-theme-item:hover input:not([disabled])~span{opacity:1}#template-customizer .template-customizer-theme-item input:checked:not([disabled])~span .template-customizer-theme-checkmark{opacity:1}#template-customizer .template-customizer-theme-colors span{display:block;margin:0 1px;width:10px;height:10px;border-radius:50%;-webkit-box-shadow:0 0 0 1px rgba(0,0,0,.1) inset;box-shadow:0 0 0 1px rgba(0,0,0,.1) inset}#template-customizer.template-customizer-loading .template-customizer-inner,#template-customizer.template-customizer-loading-theme .template-customizer-themes-inner{opacity:.2}#template-customizer.template-customizer-loading .template-customizer-inner::after,#template-customizer.template-customizer-loading-theme .template-customizer-themes-inner::after{content:"";position:absolute;top:0;right:0;bottom:0;left:0;z-index:999;display:block}.layout-menu-100vh #template-customizer{height:100vh}[dir=rtl] #template-customizer{right:auto;left:0;-webkit-transform:translateX(-380px);-ms-transform:translateX(-380px);transform:translateX(-380px)}[dir=rtl] #template-customizer .template-customizer-open-btn{right:0;left:auto;-webkit-transform:translateX(62px);-ms-transform:translateX(62px);transform:translateX(62px)}[dir=rtl] #template-customizer .template-customizer-close-btn{right:auto;left:0}#template-customizer .template-customizer-layouts-options[disabled]{opacity:.5;pointer-events:none}[dir=rtl] .template-customizer-t-style_switch_light{padding-right:0 !important}</style>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./login_nuevo_files/config.js"></script><link rel="stylesheet" type="text/css" href="./login_nuevo_files/core.css" class="template-customizer-core-css"><link rel="stylesheet" type="text/css" href="./login_nuevo_files/theme-semi-dark.css" class="template-customizer-theme-css">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="./login_nuevo_files/js"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body>

  <!-- Content -->

<div class="authentication-wrapper authentication-cover">
  <div class="authentication-inner row m-0">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
      <div class="flex-row text-center mx-auto">
        <img src="./login_nuevo_files/login-light.png" alt="Auth Cover Bg color" width="520" class="img-fluid authentication-cover-img" data-app-light-img="pages/login-light.png" data-app-dark-img="pages/login-dark.png">
        <div class="mx-auto">
          <h3>Discover the powerful admin template 🥳</h3>
          <p>
            Perfectly suited for all level of developers which helps you to <br> kick start your next big projects &amp; Applications.
          </p>
        </div>
      </div>
    </div>
    <!-- /Left Text -->

    <!-- Login -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
      <div class="w-px-400 mx-auto">
        <!-- Logo -->
        <div class="app-brand mb-4">
          <a href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/vertical-menu-template-semi-dark/index.html" class="app-brand-link gap-2 mb-2">
            <span class="app-brand-logo demo">
<svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <title>icon</title>
  <defs>
    <lineargradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
      <stop stop-color="#5A8DEE" offset="0%"></stop>
      <stop stop-color="#699AF9" offset="100%"></stop>
    </lineargradient>
    <lineargradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
      <stop stop-color="#FDAC41" offset="0%"></stop>
      <stop stop-color="#E38100" offset="100%"></stop>
    </lineargradient>
  </defs>
  <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
      <g id="Login" transform="translate(519.000000, 244.000000)">
        <g id="Logo" transform="translate(148.000000, 42.000000)">
          <g id="icon" transform="translate(0.000000, 4.000000)">
            <path d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z" id="Combined-Shape" fill="#4880EA"></path>
            <path d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z" id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
            <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
          </g>
        </g>
      </g>
    </g>
  </g>
</svg>

</span>
            <span class="app-brand-text demo h3 mb-0 fw-bold">Frest</span>
          </a>
        </div>
        <!-- /Logo -->
        <h4 class="mb-2">Welcome to Frest! 👋</h4>
        <p class="mb-4">Please sign-in to your account and start the adventure</p>

        <form id="formAuthentication" class="mb-3 fv-plugins-bootstrap5 fv-plugins-framework" action="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/vertical-menu-template-semi-dark/index.html" method="POST" novalidate="novalidate">
          <div class="mb-3 fv-plugins-icon-container">
            <label for="email" class="form-label">Email or Username</label>
            <input type="text" class="form-control" id="email" name="email-username" placeholder="Enter your email or username" autofocus="">
          <div class="fv-plugins-message-container invalid-feedback"></div></div>
          <div class="mb-3 form-password-toggle fv-plugins-icon-container">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="password">Password</label>
              <a href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/vertical-menu-template-semi-dark/auth-forgot-password-cover.html">
                <small>Forgot Password?</small>
              </a>
            </div>
            <div class="input-group input-group-merge has-validation">
              <input type="password" id="password" class="form-control" name="password" placeholder="············" aria-describedby="password">
              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div><div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember-me">
              <label class="form-check-label" for="remember-me">
                Remember Me
              </label>
            </div>
          </div>
          <button class="btn btn-primary d-grid w-100">
            Sign in
          </button>
        <input type="hidden"></form>

        <p class="text-center">
          <span>New on our platform?</span>
          <a href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/vertical-menu-template-semi-dark/auth-register-cover.html">
            <span>Create an account</span>
          </a>
        </p>

        <div class="divider my-4">
          <div class="divider-text">or</div>
        </div>

        <div class="d-flex justify-content-center">
          <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
            <i class="tf-icons bx bxl-facebook"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
            <i class="tf-icons bx bxl-google-plus"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon btn-label-twitter">
            <i class="tf-icons bx bxl-twitter"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- /Login -->
  </div>
</div>

<!-- / Content -->

  
  <div class="buy-now">
    <a href="https://1.envato.market/frest_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div>
  

  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="./login_nuevo_files/jquery.js"></script>
  <script src="./login_nuevo_files/popper.js"></script>
  <script src="./login_nuevo_files/bootstrap.js"></script>
  <script src="./login_nuevo_files/perfect-scrollbar.js"></script>
  
  <script src="./login_nuevo_files/hammer.js"></script>
  

  <script src="./login_nuevo_files/i18n.js"></script>
  <script src="./login_nuevo_files/typeahead.js"></script>
  
  <script src="./login_nuevo_files/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="./login_nuevo_files/FormValidation.min.js"></script>
<script src="./login_nuevo_files/Bootstrap5.min.js"></script>
<script src="./login_nuevo_files/AutoFocus.min.js"></script>

  <!-- Main JS -->
  <script src="./login_nuevo_files/main.js"></script>

  <!-- Page JS -->
  <script src="./login_nuevo_files/pages-auth.js"></script>



<div id="template-customizer" class="invert-bg-white" style="visibility: visible"> <a href="javascript:void(0)" class="template-customizer-open-btn" tabindex="-1"></a> <div class="p-4 m-0 lh-1 border-bottom template-customizer-header"> <h4 class="template-customizer-t-panel_header mb-2">TEMPLATE CUSTOMIZER</h4> <p class="template-customizer-t-panel_sub_header mb-0">Customize and preview in real time</p> <a href="javascript:void(0)" class="btn-close template-customizer-close-btn fw-light px-4 py-2 text-body" tabindex="-1"></a> </div> <div class="template-customizer-inner pt-4"> <div class="template-customizer-theming"> <h5 class="m-0 px-4 py-4 lh-1 text-light d-block"> <span class="template-customizer-t-theming_header">THEMING</span> </h5> <div class="m-0 px-4 pb-3 template-customizer-themes w-100"> <label for="customizerTheme" class="form-label template-customizer-t-theme_label">Themes</label> <div class="row row-cols-lg-auto g-3 align-items-center template-customizer-themes-options"><div class="col-12"><div class="form-check"><input class="form-check-input" type="radio" name="themeRadios" id="themeRadiostheme-default" value="theme-default"><label class="form-check-label" for="themeRadiostheme-default">Default</label></div></div><div class="col-12"><div class="form-check"><input class="form-check-input" type="radio" name="themeRadios" id="themeRadiostheme-semi-dark" value="theme-semi-dark" checked="checked"><label class="form-check-label" for="themeRadiostheme-semi-dark">Semi Dark</label></div></div><div class="col-12"><div class="form-check"><input class="form-check-input" type="radio" name="themeRadios" id="themeRadiostheme-bordered" value="theme-bordered"><label class="form-check-label" for="themeRadiostheme-bordered">Bordered</label></div></div></div> </div> <div class="m-0 px-4 pb-3 pt-1 template-customizer-style w-100"> <label for="customizerStyle" class="form-label d-block template-customizer-t-style_label">Style (Mode)</label> <label class="switch switch-sm"> <span class="switch-label template-customizer-t-style_switch_light">Light</span> <input type="checkbox" class="switch-input"> <span class="switch-toggle-slider"> <span class="switch-on"></span> <span class="switch-off"></span> </span> <span class="switch-label template-customizer-t-style_switch_dark">Dark</span> </label> </div> </div> <div class="template-customizer-layout"> <hr class="m-0 border-light"> <h5 class="m-0 px-4 py-4 lh-1 text-light d-block"> <span class="template-customizer-t-layout_header">LAYOUT</span> </h5> <div class="m-0 px-4 pb-3 d-block template-customizer-layoutType"> <label for="customizerStyle" class="form-label d-block template-customizer-t-layout_label">Layout (Menu)</label> <div class="row row-cols-lg-auto g-3 align-items-center template-customizer-layouts-options"> <div class="col-12"> <div class="form-check"> <input class="form-check-input" type="radio" name="layoutRadios" id="layoutRadios-static" value="static"> <label class="form-check-label template-customizer-t-layout_static" for="layoutRadios-static">Static</label> </div> </div> <div class="col-12"> <div class="form-check"> <input class="form-check-input" type="radio" name="layoutRadios" id="layoutRadios-fixed" value="fixed" checked="checked"> <label class="form-check-label template-customizer-t-layout_fixed" for="layoutRadios-fixed">Fixed</label> </div> </div> </div> </div> <label class="m-0 px-4 pb-3 d-flex media align-items-middle justify-content-between template-customizer-layoutNavbarFixed"> <span class="template-customizer-t-layout_navbar_label">Fixed navbar</span> <label class="switch switch-sm pe-4"> <input type="checkbox" class="switch-input" checked="checked"> <span class="switch-toggle-slider"> <span class="switch-on"></span> <span class="switch-off"></span> </span> </label> </label> <label class="m-0 px-4 pb-3 d-flex media align-items-middle justify-content-between template-customizer-layoutFooterFixed"> <span class="template-customizer-t-layout_footer_label">Fixed footer</span> <label class="switch switch-sm pe-4"> <input type="checkbox" class="switch-input"> <span class="switch-toggle-slider"> <span class="switch-on"></span> <span class="switch-off"></span> </span> </label> </label> <label class="m-0 px-4 pb-3 d-flex media align-items-middle justify-content-between template-customizer-showDropdownOnHover"> <span class="template-customizer-t-layout_dd_open_label">Dropdown on hover</span> <label class="switch switch-sm pe-4"> <input type="checkbox" class="switch-input" checked="checked"> <span class="switch-toggle-slider"> <span class="switch-on"></span> <span class="switch-off"></span> </span> </label> </label> </div> <div class="template-customizer-misc"> <hr class="m-0 border-light"> <h5 class="m-0 px-4 py-4 lh-1 text-light d-block"> <span class="template-customizer-t-misc_header">MISC</span> </h5> <label class="m-0 px-4 pb-3 d-flex media align-items-middle justify-content-between template-customizer-rtl"> <span class="template-customizer-t-rtl_label">RTL direction</span> <label class="switch switch-sm pe-4"> <input type="checkbox" class="switch-input"> <span class="switch-toggle-slider"> <span class="switch-on"></span> <span class="switch-off"></span> </span> </label> </label> </div> </div> </div></body></html>