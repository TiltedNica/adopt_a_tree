<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Varela+Round&display=swap"
        rel="stylesheet"
    />
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
<section
    class="banner bg-[url('/public/img/banner2.webp')] py-80 bg-cover bg-no-repeat bg-center flex flex-col justify-center items-center"
>
    <div
        class="navigator flex justify-between px-14 py-6 items-center fixed top-0 w-full"
    >
        <img
            width="200px"
            src="{{asset('img/logo.png')}}"
            alt="#"
            class="object-contain"
        />
        <nav class="">
            <ul class="flex gap-x-6 text-gray-700">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Donators</a></li>
                <li><a href="#"></a></li>

                @auth()
                    <div>
                        <a
                            href="#"
                            class="font-bold text-gray-600 text-sm"
                        >Hola: <span class="font-normal">{{auth()->user()->username}}</span></a
                        >
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit"
                                class="px-7 py-4 bg-[#00a23b] font-semibold text-white rounded-xl"
                            >Cerrar Sesion</button
                            >
                        </form>
                    </div>
                @endauth

                @guest()
                    <div>
                        <a
                            href="{{route('register')}}"
                            class="px-7 py-4 bg-[#00a23b] font-semibold text-white rounded-xl"
                        >Register 🌳</a
                        >
                        <a
                            href="/login"
                            class="px-7 py-4 bg-[#00a23b] font-semibold text-white rounded-xl"
                        >Login 🌳</a
                        >
                    </div>
                @endguest
            </ul>
        </nav>
    </div>

    <div class="text-center font-['Quicksand'] lg:w-[700px] md:w-3/4 sm:w-full">
        @yield('content')
    </div>
</section>
</body>
</html>
