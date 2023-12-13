<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        @include('layouts.header')
</head>
        <body>
        <!-- Topbar Section Start -->
        <!-- <div class="topbar-section section bg-primary2">
                <div class="container">
                <div class="row justify-content-between align-items-center">
                        <div class="col-md-12">
                        <a href="tel:+91 0000000000" class="text-black text-center text-uppercase top-header-text my-2"><svg data-ux="SVG" viewBox="0 0 34.26 27.83" dataaids="SEASONAL_SUMMER_LEFT_ICON_RENDERED" class="x-el x-el-svg c1-1 c1-2 c1-1g c1-1h c1-1i c1-w c1-x c1-b c1-c c1-d c1-1j c1-e c1-f c1-g icon-topbar"><g stroke="currentColor" fill="none" stroke-width="1px"><path d="M15,13.89s5-12.13,18.31-8L27.9,9.24a.56.56,0,0,1-.68-.09,2.49,2.49,0,0,0-1.72-.86l.68,1.52a.71.71,0,0,1-.24.87l-3,2.12a.22.22,0,0,1-.32-.08c-.18-.38-.58-1.06-1.21-1.06,0,0,.76,1.92.38,2.23C21.73,13.89,18,16.45,15,13.89Z" style="transform-origin:50% 50%;transform:rotate(5deg);animation:sway-right 3s infinite"></path><g style="transform-origin:50% 30%;transform:rotate(0deg);animation:sway-left 3s infinite;animation-delay:1.5s"><path d="M15.09,14.37S14.75,1.26.81.42l3.92,5a.56.56,0,0,0,.67.16,2.49,2.49,0,0,1,1.91-.2L6.14,6.6a.71.71,0,0,0-.08.9l1.83,2.68"></path><path d="M8.95,10.23A1.18,1.18,0,0,1,10,10s-.3.33-.6.73"></path></g><path d="M15,13.25S8.9,7,1.72,13l4.21.66a.37.37,0,0,0,.4-.23,1.66,1.66,0,0,1,.84-1l0,1.11a.47.47,0,0,0,.37.48l2.42.54a.15.15,0,0,0,.18-.13c0-.28.09-.8.48-1,0,0,0,1.38.33,1.47C10.92,14.95,13.89,15.58,15,13.25Z" style="transform-origin:50% 30%;transform:rotate(0deg);animation:sway-left 3s infinite;animation-delay:1.7s"></path><path d="M9.55,10.56"></path><path d="M11.51,26.92A13.24,13.24,0,0,1,15,13.83s-2.4,10.3-.34,13.32a.19.19,0,0,1-.15.31H12.23A.74.74,0,0,1,11.51,26.92Z"></path><path d="M11.15,21.47s.89-1.07,1.61-.83"></path></g></svg> Unleash big savings with promocode "DWMSPECIAL5"  <svg data-ux="SVG" viewBox="0 0 34.26 27.83" dataaids="SEASONAL_SUMMER_LEFT_ICON_RENDERED" class="x-el x-el-svg c1-1 c1-2 c1-1g c1-1h c1-1i c1-w c1-x c1-b c1-c c1-d c1-1j c1-e c1-f c1-g icon-topbar"><g stroke="currentColor" fill="none" stroke-width="1px"><path d="M15,13.89s5-12.13,18.31-8L27.9,9.24a.56.56,0,0,1-.68-.09,2.49,2.49,0,0,0-1.72-.86l.68,1.52a.71.71,0,0,1-.24.87l-3,2.12a.22.22,0,0,1-.32-.08c-.18-.38-.58-1.06-1.21-1.06,0,0,.76,1.92.38,2.23C21.73,13.89,18,16.45,15,13.89Z" style="transform-origin:50% 50%;transform:rotate(5deg);animation:sway-right 3s infinite"></path><g style="transform-origin:50% 30%;transform:rotate(0deg);animation:sway-left 3s infinite;animation-delay:1.5s"><path d="M15.09,14.37S14.75,1.26.81.42l3.92,5a.56.56,0,0,0,.67.16,2.49,2.49,0,0,1,1.91-.2L6.14,6.6a.71.71,0,0,0-.08.9l1.83,2.68"></path><path d="M8.95,10.23A1.18,1.18,0,0,1,10,10s-.3.33-.6.73"></path></g><path d="M15,13.25S8.9,7,1.72,13l4.21.66a.37.37,0,0,0,.4-.23,1.66,1.66,0,0,1,.84-1l0,1.11a.47.47,0,0,0,.37.48l2.42.54a.15.15,0,0,0,.18-.13c0-.28.09-.8.48-1,0,0,0,1.38.33,1.47C10.92,14.95,13.89,15.58,15,13.25Z" style="transform-origin:50% 30%;transform:rotate(0deg);animation:sway-left 3s infinite;animation-delay:1.7s"></path><path d="M9.55,10.56"></path><path d="M11.51,26.92A13.24,13.24,0,0,1,15,13.83s-2.4,10.3-.34,13.32a.19.19,0,0,1-.15.31H12.23A.74.74,0,0,1,11.51,26.92Z"></path><path d="M11.15,21.47s.89-1.07,1.61-.83"></path></g></svg> </a>
                        </div>

                </div>
                </div>
        </div> -->
        <!-- Topbar Section End -->
        <!-- Header Section Start -->
        @include('layouts.header-menu')
        @yield('content')
        <!-- Header Section End -->
        @include('layouts.footer')
        </body>
</html>