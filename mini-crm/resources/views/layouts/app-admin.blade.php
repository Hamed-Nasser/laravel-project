<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include ('layouts.site-css')

  @include ('layouts.site-js')

   </head>
   <body class="hold-transition skin-blue sidebar-mini">
     
     @include ('layouts.top-bar')
    
      
      <!-- Left side column. contains the logo and sidebar -->
     @include ('layouts.sidebar')
      <!-- Content Wrapper. Contains page content -->
      @yield('content')
      
      
      @include ('layouts.footer')

    
     

  </body>
  </html>
