<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Varela+Round&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <title>@yield('title')</title>
    @vite('resources/css/styles.css')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="pb-20">
    <section id="home" class="banner bg-[url('/public/img/banner2.webp')] lg:py-80 md:py-72 sm:py-64 bg-cover bg-no-repeat bg-center flex flex-col justify-center items-center">
        <div class="navigator flex justify-between lg:px-14 md:px-10 sm:px-5 py-4 items-center    fixed top-0 w-full z-50">
            <img width="200px" src="{{asset('img/logo.png')}}" alt="#" class="lg:w-[200px] md:w-44 sm:w-36 object-contain" />

            <div class="hamburguer p-3 lg:hidden md:hidden sm:block cursor-pointer">
                <div class="first w-8 h-1 bg-green-600 rounded"></div>
                <div class="second w-6 h-1 bg-green-600 mt-2 rounded"></div>
            </div>

            <nav class="navbar lg:block md:block sm:hidden duration-500 ease-in-out">
                <span class="close cursor-pointer lg:hidden md:hidden sm:block absolute top-10 right-10 text-3xl font-bold text-slate-700">X</span>

                <ul class="flex gap-x-6 text-gray-700 items-center">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#volunteers">Volunteers</a></li>
                    <li><a href="{{route('plantStore')}}">Quiero adoptar</a></li>
                    <li><a href="#"></a></li>

                    @auth()
                    <div class="flex">

                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="px-7 py-4 bg-[#00a23b] font-semibold text-white rounded-xl">Cerrar Sesion</button>
                        </form>
                    </div>

                    @endauth

                    @guest()
                    <div>
                        <a href="{{route('register')}}" class="px-7 py-4 bg-[#c8ffdc] border-[3px] border-[#00a23b] font-semibold text-[#00a23b] rounded-xl">Register 🌳</a>
                        <a href="/login" class="px-7 py-4 bg-[#00a23b] font-semibold text-white rounded-xl">Login 🌳</a>
                    </div>
                    @endguest
                </ul>
            </nav>
        </div>

        <div class="text-center font-['Quicksand'] lg:w-[700px] md:w-3/4 sm:w-full">
            @auth()
            <h1 class="font-bold lg:text-6xl md:text-6xl sm:text-5xl text-slate-700 pb-10">
                <span>Hola, <span class="text-green-600 underline underline-offset-8">{{auth()->user()->name}}</span></span>
                Crezcamos juntos en un mundo limpio!
            </h1>
            @endauth

            @guest()
            <h1 class="font-bold lg:text-6xl md:text-6xl sm:text-5xl text-slate-700 pb-10">
                Crezcamos juntos en un mundo limpio!
            </h1>
            @endguest

            <a href="{{route('catalogue')}}" class="donate py-4 px-10 bg-green-200 border-[3px] border-green-600 rounded-xl mt-20 relative font-semibold text-slate-700 z-0">Donar ahora</a>
        </div>

    </section>
    @yield('content')

</body>

</html>