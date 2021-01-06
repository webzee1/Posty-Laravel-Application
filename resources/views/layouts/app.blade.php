<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posty</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body class="bg-gray-200">
    
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="/" class="p-3 font-medium">Home</a>
                </li>
                
                <li>
                    <a href="{{ route('dashboard') }}" class="p-3 font-medium">Dashboard</a>
                </li>

                <li>
                    <a href="{{ route('posts') }}" class="p-3 font-medium">Post</a>
                </li>
            </ul>


            <ul class="flex items-center">

                @auth

                <li>
                    <a href="" class="p-3 bold font-bold">{{ auth()->user()->name }}</a>
                </li>

                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="p-3 font-medium">logout</button>
                    </form>
                </li>

                @endauth

                @guest
                <li>
                    <a href="{{ route('login')}}" class="p-3 font-medium">Login</a>
                </li>

                <li>
                    <a href="{{ route('register')}}" class="p-3 font-medium">Register</a>
                </li>


                @endguest


                
                
                
               
            </ul>
        </nav>




    @yield('content')


</body>
</html>