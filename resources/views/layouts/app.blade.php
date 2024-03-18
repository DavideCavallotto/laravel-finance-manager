<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finance Manager</title>
    @vite('resources/js/app.js')
    
</head>
<body id="finance-manager">
    <div class="vh-100 d-flex flex-column justify-content-between">
        <header>
            @include('partials.header')
        </header>
    
        <main class="text-center flex-grow-1">
            @yield('content')
        </main>
    
        <footer class="text-center">
            @include('partials.footer')        
        </footer>    

    </div>
</body>
</html>

<style>
    #finance-manager {
        background-image: url('/image/finance-img.jpg');
        background-position: center;
        background-size: cover;
    }
</style>