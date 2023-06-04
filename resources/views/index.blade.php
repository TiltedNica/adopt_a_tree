@extends('layouts.app')

@section('title')
    Adopt a Tree
@endsection

@section('content')
    <h1 class="font-bold lg:text-6xl md:text-6xl sm:text-5xl text-slate-700 pb-10">
        Crezcamos juntos en un mundo limpio!
    </h1>
    <a
        href="{{route('catalogue')}}"
        class="donate py-4 px-10 bg-green-200 border-[3px] border-green-600 rounded-xl mt-20 relative font-semibold text-slate-700 z-0"
    >Donar ahora</a
    >
@endsection
