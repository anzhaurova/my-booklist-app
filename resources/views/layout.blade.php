<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{-- <link rel="stylesheet" href="{{ asset('css/app/css') }}"> --}}
    @vite('resources/css/app.css')
    <title>Booklists | Find or Create your own booklists</title>
</head>
<body class="mb-48">
    <h1>My Booklist App</h1>
    {{-- VIEW OUTPUT--}}
    
    <main>
        @yield('content')
    </main>
    <footer>
        <p>Copyright &copy; 2023, All Rights reserved</p>
        <a href="create.html" class="absolute top-1/3 right-10 bg-olive py-2 px-5">Create booklists</a>
    </footer>
</body>

</html> 