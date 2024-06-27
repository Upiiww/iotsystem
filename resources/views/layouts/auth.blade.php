

<!doctype html>
<html lang="en">
  <head>
  @include ('layouts.dashboard._head')
     </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
   @yield('isi')
      </div>
    
    <!-- Backend Bundle JavaScript -->
    @include ('layouts.dashboard._foot')

</body>
</html>