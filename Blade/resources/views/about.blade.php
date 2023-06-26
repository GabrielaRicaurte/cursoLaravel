@extends('layouts.landing')

@section('title', 'About')

@section('content')
    <h1> About </h1>
    @component('_components.card')
        @slot('title', 'About')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.')
    @endcomponent
@endsection
