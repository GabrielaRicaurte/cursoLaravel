@extends('layouts.landing')

@section('title', 'Home') {{-- Los section va conectado al yield del archivo Landing --}}

@section('content')
    <h1>Home</h1>

    @component('_components.card')
        @slot('title', 'Index')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.')
    @endcomponent

    <hr>

    @component('_components.card')
        @slot('title', 'Index')
        @slot('content')
            <h3>Example</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        @endslot
        {{-- Con esto podemos agregar contenido html al componente --}}
    @endcomponent

@endsection
