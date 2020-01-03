<!DOCTYPE html>
<html>
  <head>

        @include('frontend.user.includes.header')
  
</head>
  <body>

    @include('frontend.user.includes.left_sidebar')

    <div class="page">
            @include('frontend.user.includes.navbar')

     
                @yield('Main_Content')

      
            @include('frontend.user.includes.footer')
    </div>



    @include('frontend.user.includes.script')
    
  </body>
</html>