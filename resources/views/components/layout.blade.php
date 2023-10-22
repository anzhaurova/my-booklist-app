<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/favicon.ico" />

    @vite('resources/css/app.css')

</head>
<body class="mb-48">

    {{-- VIEW OUTPUT--}}

    <nav class="flex justify-between items-center mb-0">
        <a href="/">
            <img class="w-24" src="{{asset('images/compact-logo.png')}}" alt="" class="logo"/>
        </a>

        <div class="z-10">
            <h1 class="text-4xl font-bold uppercase text-black ">
              My Book<span class="text-black">Lists</span>
            </h1>
            <p class="text-2xl text-gray-200 my-0">Find or Create your own booklists</p>
            <div>
              @auth
              @else
              {{-- <a href="/register"
                class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Sign
                Up to booklist</a> --}}
              @endauth
            </div>
          </div>

        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <a href="register.html" class="hover:text-laravel">
                    <i class="fa-solid fa-user-plus"></i> Register
                </a>
            </li>
            <li>
                <a href="login.html" class="hover:text-laravel">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>Login
                </a>
            </li>
        </ul>
    </nav>

    <main>
        {{$slot}}
    </main>
    <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start bg-black text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2023 all rights reserved</p>
        <a href="/booklist/create" class="absolute top-1/3 right-10 text-white py-2 px-5">Create Booklist</a>
        <a href="/book/create" class="absolute top-1/3 left-10 text-white py-2 px-5">Create Book</a>
        <a href="/author/create" class="absolute top-1/3 left-40 text-white py-2 px-5">Create Author</a>
    </footer>
</body>
</html>