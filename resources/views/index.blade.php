@extends('layouts.app')

@section('title')
    Adopt a Tree
@endsection

@section('content')
    <div class="separator flex items-center gap-x-5 mt-10 justify-center">
        <div class="w-5/12 h-[1px] bg-green-600"></div>
        <div class="text-3xl">🌳</div>
        <div class="w-5/12 h-[1px] bg-green-600"></div>
    </div>

    <section class="plants mt-10 w-full flex flex-col items-center">
        <h2
            class="text-center font-bold lg:text-6xl md:text-6xl sm:text-5xl text-slate-700"
        >
            Últimas plantaciones
        </h2>

        <div class="plants_wrapper mt-20 flex flex-wrap justify-center gap-10">
            <div class="box w-72 h-auto pb-4 rounded-xl bg-white shadow-md">
                <img
                    src="{{asset('img/cipress_tree.jpeg')}}"
                    class="w-full h-72 object-cover rounded-xl"
                    alt=""
                />
                <div class="text-wrapper px-2 mt-4">
                    <h5 class="text-lg font-bold text-slate-700">Gustavo Mejía</h5>
                    <p
                        class="text-md font-medium text-green-600 -mt-1 font-['Quicksand']"
                    >
                        Plantó un árbol de Cipress
                    </p>

                    <div class="hour flex gap-2 items-center mt-3">
                        <img src="{{asset('img/clock.svg')}}" alt="" />
                        <span
                            class="text-sm font-['Quicksand'] text-green-600 font-normal"
                        >5 minutes ago</span
                        >
                    </div>
                </div>
            </div>

            <div class="box w-72 h-auto pb-4 rounded-xl bg-white shadow-md">
                <img
                    src="{{asset('img/mangle_arbol.jpeg')}}"
                    class="w-full h-72 object-cover rounded-xl"
                    alt=""
                />
                <div class="text-wrapper px-2 mt-4">
                    <h5 class="text-lg font-bold text-slate-700">José Perez</h5>
                    <p
                        class="text-md font-medium text-green-600 -mt-1 font-['Quicksand']"
                    >
                        Plantó un árbol de Mangle
                    </p>

                    <div class="hour flex gap-2 items-center mt-3">
                        <img src="{{asset('img/clock.svg')}}" alt="" />
                        <span
                            class="text-sm font-['Quicksand'] text-green-600 font-normal"
                        >30 minutes ago</span
                        >
                    </div>
                </div>
            </div>

            <div class="box w-72 h-auto pb-4 rounded-xl bg-white shadow-md">
                <img
                    src="{{asset('img/mango_tree.webp')}}"
                    class="w-full h-72 object-cover rounded-xl"
                    alt=""
                />
                <div class="text-wrapper px-2 mt-4">
                    <h5 class="text-lg font-bold text-slate-700">Aynat Cortez</h5>
                    <p
                        class="text-md font-medium text-green-600 -mt-1 font-['Quicksand']"
                    >
                        Plantó un árbol de Mango
                    </p>

                    <div class="hour flex gap-2 items-center mt-3">
                        <img src="{{asset('img/clock.svg')}}" alt="" />
                        <span
                            class="text-sm font-['Quicksand'] text-green-600 font-normal"
                        >1 hour ago</span
                        >
                    </div>
                </div>
            </div>

            <div class="box w-72 h-auto pb-4 rounded-xl bg-white shadow-md">
                <img
                    src="{{asset('img/taxodium_tree.jpeg')}}"
                    class="w-full h-72 object-cover rounded-xl"
                    alt=""
                />
                <div class="text-wrapper px-2 mt-4">
                    <h5 class="text-lg font-bold text-slate-700">Carlos Centeno</h5>
                    <p
                        class="text-md font-medium text-green-600 -mt-1 font-['Quicksand']"
                    >
                        Plantó un árbol de Taxodium
                    </p>

                    <div class="hour flex gap-2 items-center mt-3">
                        <img src="{{asset('img/clock.svg')}}" alt="" />
                        <span
                            class="text-sm font-['Quicksand'] text-green-600 font-normal"
                        >1 hour ago</span
                        >
                    </div>
                </div>
            </div>
        </div>

        @auth()
            <a href="{{route('plantStore')}}"
                class="mt-10 text-center py-3 px-10 bg-green-200 border-[3px] border-green-600 rounded-xl text-slate-700 font-bold"
            >Descubre nuestro catalogo</a
            >
        @endauth
    </section>

    <section id="about" class="about_us mt-24 flex flex-wrap">
        <div class="swiper object-cover">
            <div class="swiper-wrapper ">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="{{asset('img/voluntarios1.jpeg')}}" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('img/voluntarios2.jpeg')}}" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('img/voluntarios3.jpeg')}}" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('img/voluntarios4.webp')}}" alt="" />
                </div>
            </div>
        </div>

        <div
            class="flex flex-col lg:items-start md:items-center sm:items-center text-about lg:w-6/12 md:w-full sm:w-full lg:text-left md:text-center sm:text-center lg:mt-0 md:mt-10 sm:mt-10"
        >
            <h2
                class="lg:text-6xl md:text-6xl sm:text-5xl text-slate-700 font-bold"
            >
                Sobre nosotros
            </h2>
            <p
                class="lg:pr-14 md:pr-0 sm:px-2 mt-10 leading-7 font-['Quicksand'] font-normal text-gray-600"
            >
                Nuestro principal objetivo sobre este proyecto es aportar un granito
                de nuestra arena para fortalecer nuestro medio ambiente. Ya que al
                pasar de los últimos años la vida de nuestro ecosistema se ha visto
                afectado. <br /><br />

                Hemos formado un equipo sólido conformado por diferentes personas
                voluntarias para este trabajo, contamos con voluntarios que se
                encargan de plantar el arbol que tu aportas desde nuestro sitio web,
                contamos con ingenieros encargados de mantenerte al tanto de nuestros
                actividades de plantación, entre otras áreas que al igual son
                importantes para poder lograr con éxito este objetivo,
                <span class="text-green-600 font-bold">
            el salvar nuestro planeta.</span
                >
                <br /><br />

                Así que con tu aporte y con el nuestro queremos extender la vida de
                nuestro medio ambiente <span class="text-2xl">🌱</span>
            </p>

            <a
                href="#"
                class="mt-10 text-center py-3 px-10 bg-green-200 border-[3px] border-green-600 rounded-xl text-slate-700 font-bold"
            >Quiero ser voluntario</a
            >
        </div>
    </section>

    <div class="separator flex items-center gap-x-5 mt-10 justify-center">
        <div class="w-5/12 h-[1px] bg-green-600"></div>
        <div class="text-3xl">🪴</div>
        <div class="w-5/12 h-[1px] bg-green-600"></div>
    </div>

    <section class="mt-10 flex flex-col items-center">
        <h2
            class="text-center font-bold lg:text-6xl md:text-6xl sm:text-5xl text-slate-700"
        >
            Cómo puedes plantar un árbol?
        </h2>

        <div
            class="wrapper-box flex flex-wrap w-5/6 shadow-xl rounded-lg h-auto mt-10"
        >
            <div class="image lg:w-6/12 md:w-6/12 sm:w-full inset-0">
                <img src="{{asset('img/voluntario5.jpeg')}}" class="rounded-xl w-full h-full object-cover" alt="" />
            </div>

            <div class="text-info lg:w-6/12 md:w-6/12 sm:w-full py-8 lg:px-10 md:px-10 sm:px-5">
                <h5 class="text-xl font-bold text-slate-700">
                    Sigue nuestros pasos correctamente
                </h5>

                <ol
                    class="mt-10 font-['Quicksand'] font-medium text-slate-700 flex flex-col gap-y-3"
                >
                    <li>
                        👉 Primero debes iniciar sesión, si no has iniciado sesion,
                        <span class="text-green-600"
                        ><a href="{{route('login')}}">haz click aquí.</a></span
                        >
                    </li>
                    <li>
                        👉 Si no posees cuenta, te invitamos a registrate,
                        <span class="text-green-600"
                        ><a href="{{route('register')}}">registrate aquí.</a></span
                        >
                    </li>
                    <li>
                        👉 Ya con sesion iniciada, busca nuestro catalogo de plantas
                        disponibles.
                    </li>
                    <li>
                        👉 Ya habiendo seleccionado la planta, se te abrirá otra pestaña
                        en donde se te dará la opción de donar dinero (no es obligatorio).
                    </li>
                    <li>
                        👉 Pasando u omitiendo el proceso de donación se te enviará un
                        mensaje de confirmación de que tu árbol en los proximos dias será
                        plantado.
                    </li>
                    <li>
                        👉 Nuestro equipo menos de 72 horas te hará llegar un correo
                        confirmando que tu arbol fue plantado con una foto de evidencia
                    </li>
                    <li>
                        👉 Para finalizar nuestro proceso, te haremos llegar hasta tu
                        hogar una regalía de una pulsera con el plástico reciclado
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section id="volunteers" class="mt-20 flex flex-col items-center">
        <h2
            class="text-center font-bold lg:text-6xl md:text-6xl sm:text-5xl text-slate-700"
        >
            Nuestros voluntarios
        </h2>

        <p class="mt-10 font-['Quicksand'] text-lg font-medium text-slate-700 px-36 text-center">
            Gracias a todos nuestros voluntarios hacemos posible nuestras
            actividades de siembra, sin su apoyo nuestro objetivo con el medio
            ambiente no seria posible
        </p>

        <div class="volunteers_container flex flex-wrap gap-10 justify-center mt-10 px-10 overflow-hidden">

            <div class="box_volunteer w-[280px] h-[400px] shadow-lg rounded-xl relative">
                <div class="skeleton"></div>
                <img src="https://previews.123rf.com/images/antoniodiaz/antoniodiaz2107/antoniodiaz210700416/172185117-orgulloso-de-nuestro-trabajo-apuestos-j%C3%B3venes-voluntarios-con-shoverls-ayudando-a-plantar-%C3%A1rboles.jpg" class="w-full h-full object-cover rounded-xl z-50" alt="#" onload="showImage(this)">
                <span class="info w-full h-20 rounded-xl flex justify-center items-center absolute bottom-0 left-0 text-2xl font-semibold text-white">Elizabeth Contreras</span>
            </div>

            <div class="box_volunteer w-[280px] h-[400px] shadow-lg rounded-xl relative">
                <div class="skeleton"></div>
                <img src="https://previews.123rf.com/images/antoniodiaz/antoniodiaz2107/antoniodiaz210700416/172185117-orgulloso-de-nuestro-trabajo-apuestos-j%C3%B3venes-voluntarios-con-shoverls-ayudando-a-plantar-%C3%A1rboles.jpg" class="w-full h-full object-cover rounded-xl z-50" alt="#" onload="showImage(this)">
                <span class="info w-full h-20 rounded-xl flex justify-center items-center absolute bottom-0 left-0 text-2xl font-semibold text-white">Elizabeth Contreras</span>
            </div>

            <div class="box_volunteer w-[280px] h-[400px] shadow-lg rounded-xl relative">
                <div class="skeleton"></div>
                <img src="https://previews.123rf.com/images/antoniodiaz/antoniodiaz2107/antoniodiaz210700416/172185117-orgulloso-de-nuestro-trabajo-apuestos-j%C3%B3venes-voluntarios-con-shoverls-ayudando-a-plantar-%C3%A1rboles.jpg" class="w-full h-full object-cover rounded-xl z-50" alt="#" onload="showImage(this)">
                <span class="info w-full h-20 rounded-xl flex justify-center items-center absolute bottom-0 left-0 text-2xl font-semibold text-white">Elizabeth Contreras</span>
            </div>

            <div class="box_volunteer w-[280px] h-[400px] shadow-lg rounded-xl relative">
                <div class="skeleton"></div>
                <img src="https://previews.123rf.com/images/antoniodiaz/antoniodiaz2107/antoniodiaz210700416/172185117-orgulloso-de-nuestro-trabajo-apuestos-j%C3%B3venes-voluntarios-con-shoverls-ayudando-a-plantar-%C3%A1rboles.jpg" class="w-full h-full object-cover rounded-xl z-50" alt="#" onload="showImage(this)">
                <span class="info w-full h-20 rounded-xl flex justify-center items-center absolute bottom-0 left-0 text-2xl font-semibold text-white">Elizabeth Contreras</span>
            </div>

        </div>

    </section>

    <script>

        function showImage(img) {
            img.classList.remove('hide-image');
            var skeleton = img.previousElementSibling;
            skeleton.style.display = 'none';
        }
    </script>

@endsection
