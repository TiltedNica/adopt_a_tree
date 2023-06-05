<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Varela+Round&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <title>Proceso de adopcion</title>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    @vite('resources/css/styles.css')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

<body class="pb-20">


    <section id="home" class="banner bg-[url('/public/img/banner5.webp')] lg:py-52 md:py-72 sm:py-64 bg-cover bg-no-repeat bg-center flex flex-col justify-center items-center">
        <div class="navigator flex justify-between lg:px-14 md:px-10 sm:px-5 py-4 items-center fixed top-0 w-full z-50">
            <img width="200px" src="{{asset('img/logo.png')}}" alt="#" class="lg:w-[200px] md:w-44 sm:w-36 object-contain" />

            <div class="hamburguer p-3 lg:hidden md:hidden sm:block cursor-pointer">
                <div class="first w-8 h-1 bg-green-600 rounded"></div>
                <div class="second w-6 h-1 bg-green-600 mt-2 rounded"></div>
            </div>

            <nav class="navbar lg:block md:block sm:hidden duration-500 ease-in-out">
                <span class="close cursor-pointer lg:hidden md:hidden sm:block absolute top-10 right-10 text-3xl font-bold text-slate-700">X</span>

                <ul class="flex gap-x-6 text-gray-700 items-center">
                    <li><a href="#home">Inicio</a></li>
                    <li><a href="#about">Sobre Nosotros</a></li>
                    <li><a href="#volunteers">Voluntarios</a></li>
                    <li><a href="#">Quiero adoptar</a></li>
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

        @auth()
        <h1 class="font-bold lg:text-6xl md:text-6xl sm:text-5xl text-white pb-10">
            Bien, hora de adoptar
        </h1>
        @endauth
    </section>


    <section class="form flex items-center justify-center mt-20">
        <form action="" method="" class="w-[1000px] h-auto px-10 py-10 shadow-xl rounded-xl">
            <h2 class="text-center font-bold text-3xl text-slate-700">Completa nuestro formulario para validar tu adopcion</h2>

            <div class="form-wrapper mt-10 flex flex-wrap gap-10 justify-around">
                <div class="label-wrapper lg:w-5/12 md:w-5/12 sm:w-full">
                    <label class="text-base font-bold text-slate-700">Nombre Completo:</label>
                    <input type="text" name="" class="border-2 py-3 px-3 rounded-xl w-full mt-2">
                </div>

                <div class="label-wrapper lg:w-5/12 md:w-5/12 sm:w-full">
                    <label class="text-base font-bold text-slate-700">Direccion de domicilio:</label>
                    <input type="text" name="" class="border-2 py-3 px-3 rounded-xl w-full mt-2">
                </div>

                <div class="label-wrapper lg:w-5/12 md:w-5/12 sm:w-full">
                    <label class="text-base font-bold text-slate-700">Cantidad de plantas a adoptar</label>
                    <input type="text" name="" class="border-2 py-3 px-3 rounded-xl w-full mt-2">
                </div>

                <div class="label-wrapper lg:w-5/12 md:w-5/12 sm:w-full">
                    <label class="text-base font-bold text-slate-700">Tipo de planta:</label>

                    
                    <select name="tipo_planta" class="border-2 py-3 px-3 rounded-xl w-full mt-2">
                        <option value="planta1">
                            <img src="{{asset('img/cipress_tree.jpeg')}}" alt="Planta 1" width="30" height="30"> Planta 1
                        </option>
                        <option value="planta2">
                            <img src="{{asset('img/cipress_tree.jpeg')}}" alt="Planta 2" width="30" height="30"> Planta 2
                        </option>
                    </select>
                </div>

                <div class="label-wrapper lg:w-5/12 md:w-5/12 sm:w-full">
                    <label class="text-base font-bold text-slate-700">Monto a donar:</label>
                    <input type="text" name="" class="border-2 py-3 px-3 rounded-xl w-full mt-2">
                </div>
            </div>
        </form>
    </section>

</body>

</html>