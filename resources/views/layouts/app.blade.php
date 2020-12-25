<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Theme CSS -->  
        <link id="theme-style" rel="stylesheet" href="{{asset('css/theme-1.css')}}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name', 'Ridlaravel')}}</title>
        <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

        <link rel="shortcut icon" href="ridwanlaravel 2/favicon.ico"> 
         
        <!-- FontAwesome JS-->
        <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    

</head>
<body>
    
        
    <div class="container-fluid">
        @include('inc.navbar')
        <div class="row">
            
            <div class="col-lg-3">
                 @include('inc.header')
            </div>
            <div class="col-lg-9">
                 
                
                 @yield('content')
                 
            </div> 
            
    
        </div>
        
        
            @include('inc.footer')
        </div>
    
    

        
        
</body>
</html>
