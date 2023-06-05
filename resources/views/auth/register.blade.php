<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/dist/output.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Varela+Round&display=swap"
        rel="stylesheet"
    />
    <title>Registrate</title>
    @vite('resources/css/app.css')
    @vite('resources/css/styles.css')
</head>

<body>
<section class="flex flex-wrap lg:h-full md:h-full sm:h-fit w-full">
    <div class="text lg:w-6/12 md:w-6/12 sm:w-full lg:h-screen md:h-screen sm:fit sm:py-5 flex items-center justify-center">
        <div class="box lg:w-9/12 md:w-9/12 sm:w-11/12 lg:py-20 md:py-20 sm:py-10 px-7 lg:text-left md:text-left sm:text-center">
            <h3 class="lg:text-5xl md:text-4xl sm:text-3xl font-bold text-white">
                Con tu ayuda podremos salvar al medio ambiente!
            </h3>
            <p class="mt-6 text-md font-light text-white">
                Recuerda que nuestras vidas dependen de nuestro medio ambiente
            </p>
        </div>
    </div>

    <div
        class="form lg:w-6/12 md:w-6/12 sm:w-full h-screen flex flex-col lg:justify-center md:justify-center sm:justify-start gap-y-4 lg:px-20 md:px-20 sm:px-10 sm:pt-8"
    >
        <img
            src="{{asset('img/logo.png')}}"
            width="160px"
            class="object-contain"
            alt="#"
        />
        <div class="text-wrapper">
            <h3 class="text-4xl font-bold text-slate-700">Hey, hola 👋</h3>
            <p class="font-light text-slate-500 mt-1">
                Introduce tus datos
            </p>
        </div>

        <form action="/register" method="post" class="flex flex-col gap-y-6 mt-4" novalidate>
            @csrf
            <div>
                <label for="name" class="text-base font-bold text-slate-700">Nombre</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    class="border-2 w-full px-3 py-3 rounded-xl mt-2 @error('name') border-red-500 @enderror"
                    value="{{old('name')}}"

                />
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="username" class="text-base font-bold text-slate-700">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    class="border-2 w-full px-3 py-3 rounded-xl mt-2 @error('username') border-red-500 @enderror"
                    value="{{old('username')}}"
                />
                @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="email" class="text-base font-bold text-slate-700">Correo</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="border-2 w-full px-3 py-3 rounded-xl mt-2 @error('email') border-red-500 @enderror"
                    value="{{old('email')}}"
                />
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="text-base font-bold text-slate-700">Contraseña</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="border-2 w-full px-3 py-3 rounded-xl mt-2 @error('password') border-red-500 @enderror"
                />
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="text-base font-bold text-slate-700">Repetir password</label>
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    class="border-2 w-full px-3 py-3 rounded-xl mt-2"
                />
            </div>

            <span class="text-right text-[#11998e]"><a href="#">Olvidaste tu contraseña?</a></span>

            <button type="submit" class="text text-white py-5 rounded-xl font-bold">Iniciar Sesión</button>
        </form>
    </div>
</section>
</body>
</html>
