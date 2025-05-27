<!DOCTYPE html >
<html lang="en"  data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('storage/css/revamp.css')}}">
    @include('layouts/head')
    @yield('customhead')
    
</head>

  <body >
    <div class="d-flex container-fluid p-0 ">
      
       @include('layouts.dash-comps.navbar')
       <!--CONTENT-->
       <div id="board-content" class="board-content border-bottom bg-light-subtle w-100">
        @include('layouts.dash-comps.head')
       </div>
      <div class="bg-light-subtle rounded-3  main-body">
        @yield('page-title')
        <div class="p-2"> @yield('content')</div>
      </div>

    </div>
  
    
   <script src={{asset('storage/js/dashboard2.js')}}>
    </script>
       <script src={{asset('storage/js/toggler.js')}}>
    </script>

    </body>
</html>