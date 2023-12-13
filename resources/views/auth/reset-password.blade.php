<html lang="en" >
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <title>Login</title>
      <meta charset="utf-8"/>
      <meta name="description" content=""/>
      <meta name="keywords" content=""/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta property="og:locale" content="en_IN" />
      <meta property="og:type" content="CMS" />
      <meta property="og:title" content="" />
      <meta property="og:url" content=""/>
      <meta property="og:site_name" content="CMS | Login" />
      <link rel="canonical" href=""/>
      <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}"/>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
      <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
      <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
   </head>
   <body  id="kt_body"  class="auth-bg bgi-size-cover bgi-attachment-fixed bgi-position-center" >
      <div class="d-flex flex-column flex-root">
         <style>
            body {
            background-image: url('{{ asset("assets/media/auth/bg10.jpg") }}');
            }
            [data-bs-theme="dark"] body {
            background-image: url('{{ asset("assets/media/auth/bg10-dark.jpg") }}');
            }
         </style>
         <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-lg-row-fluid">
               <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                  <img class="theme-light-show mx-auto mw-100 w-150px w-lg-200px mb-10 mb-lg-20" src="{{ asset('assets/media/auth/nrcp_white.png') }}" alt=""/>    
                  <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-200px mb-10 mb-lg-20" src="{{ asset('assets/media/auth/nrcp_white.png') }}" alt=""/>                 
                  <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7"> 
                     NRCP Website CMS Login
                  </h1>
                  <div class="text-gray-600 fs-base text-center fw-semibold">
                     <p>Version 1.0</p>
                    Your IP: {{ \Request::ip(); }}
                  </div>
               </div>
            </div>
            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
               <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
                  <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                     <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="{{ route('dashboard') }}" action="{{ route('authenticate') }}">
                            <div class="text-center mb-10">
                                <h1 class="text-dark fw-bolder mb-3">
                                    Forgot Password ?
                                </h1>
                                <div class="text-gray-500 fw-semibold fs-6">
                                    Enter your email to reset your password.
                                </div>
                            </div>
                            <div class="fv-row mb-8">
                                <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent"/> 
                            </div>
                           <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                              <div></div>
                              <a href="#" class="link-primary"> Forgot Password ?</a>
                           </div>
                           <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                                <button type="button" id="kt_password_reset_submit" class="btn btn-primary me-4">
                                    <span class="indicator-label"> Submit</span>
                                    <span class="indicator-progress">
                                        Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                                    <a href="sign-in.html" class="btn btn-light">Cancel</a>
                                </div>
                        </form>
                     </div>
                     <div class=" d-flex flex-stack">
                        <div class="me-10">
                           <button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                           <img  data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3" src="{{ asset('assets/media/flags/india.svg') }}" alt=""/>
                           <span data-kt-element="current-lang-name" class="me-1">English</span>
                           <i class="ki-outline ki-down fs-5 text-muted rotate-180 m-0"></i>                        
                           </button>
                           <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7" data-kt-menu="true" id="kt_auth_lang_menu">
                              <div class="menu-item px-3">
                                 <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                                 <span class="symbol symbol-20px me-4">
                                 <img data-kt-element="lang-flag" class="rounded-1" src="{{ asset('assets/media/flags/india.svg') }}" alt=""/>
                                 </span>
                                 <span data-kt-element="lang-name">English</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
      <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
      <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
   </body>
</html>