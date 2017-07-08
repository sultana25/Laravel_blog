<!DOCTYPE html>
<html lang="en">
  <head>
   @include('partials._head') 
  </head>
  <body>
   
    @include('partials._nav')  
    <div class="container">
        @include('partials._message')
        @yield('content')
        @include('partials._footer')
    </div><!-- end of cotainer-->
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    @include('partials._javascript')
    @yield('scripts')
  </body>
</html>