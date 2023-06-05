<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment confirmation</title>
    @vite('resources/css/styles.css')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="flex items-center justify-center h-screen">

<div class="box shadow-2xl w-[1000px] px-10 py-16 flex flex-col items-center justify-center">
    <span class="text-5xl">🌳🌳🌳</span>

    <h1 class="mt-10 font-bold lg:text-3xl md:text-3xl sm:text-5xl text-slate-700 pb-10">Hey, muchas gracias por ayudar
        a nuestro medio ambiente! 🙀</h1>

    <p class="-mt-5 font-['Quicksand'] font-normal text-gray-600">En un maximo de 72 horas nuestro equipo se estará
        contactando contigo para hacerte ver la siembra de tu árbol</p>

    <video src="{{asset('img/23911-checkmark-green-transparent.mp4')}}" class="w-[200px] mt-10" autoplay muted></video>

    <a href="{{route('index')}}" class="px-7 py-4 bg-[#00a23b] font-semibold text-white rounded-xl mt-5">Regresar a Inicio</a>

</div>


</body>
</html>
