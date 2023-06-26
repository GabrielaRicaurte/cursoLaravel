@extends('layouts.landing')

@section('title', 'Services')

@section('content')
    <h1> Services </h1>
    @component('_components.card')
        @slot('title', 'Services')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.')
    @endcomponent
@endsection
