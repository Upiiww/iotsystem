
<!doctype html>
<html lang="en">

  <head>
    @include ('layouts.dashboard._head')
    </head>

  <body class="  ">
    <!-- loader Start -->
    @include ('layouts.dashboard.loader')
    <!-- loader END -->

    <!-- Wrapper Start -->
    <div class="wrapper">
    @include ('layouts.dashboard.sidebar')

    @include ('layouts.dashboard.header')

      <div class="content-page">
<div class="container-fluid">
   @yield('content')
    <!-- Page end  -->
</div>
      </div>
    </div>
    <!-- Wrapper End-->
    @include ('layouts.dashboard.footer')
     <!-- Backend Bundle JavaScript -->
     @include ('layouts.dashboard._foot')
 </body>
</html>