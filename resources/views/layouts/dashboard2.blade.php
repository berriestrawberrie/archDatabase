<!DOCTYPE html >
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('layouts/head')
    @yield('customhead')
    <style>
        *{
            box-sizing: border-box; 
        }
        .left-nav{
            max-width: 300px;
            width: 100%;
            background: #0e0000;
            color: #fff;
            padding: 30px 20px;
        }
        .dash-head{
            border-bottom: 1px solid #0e0000;
        }
        .manage-btn{
            width: 190px;
            height: 45px;
            border-radius: 10px;
            border: 2px solid #0e0000;
            background: linear-gradient(90deg,#e02323,#bb1515);
            font-weight: 600;
            letter-spacing: 1.25px;
        }
        .board-ui{
            list-style-type: none;
            padding: 0;
            height: 50%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            font-size: 25px;
            letter-spacing: 1.2px;
            opacity: .8;
        }
        li:hover{
            color: #e73030;
        }
    </style>
        
</head>

  <body class="overflow-hidden">
    <div class="d-flex ">
       <div class="vh-100 left-nav"> @include('layouts.dash-comps.navbar')</div>
       <div class="w-100"> @include('layouts.dash-comps.content')</div>
    </div>
  
    
    </body>
</html>