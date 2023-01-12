@extends('layout.app')

@section('page-title')
    DC Comics - welcome
@endsection

@section('main-content')
    {{-- {{dd($comic)}} --}}
    @include('partials.main')
@endsection
