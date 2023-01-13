@extends('layout.app')

@section('page-title', 'DC Comics - Prodotto')

@section('main-content')
    <h2>Prodotto: {{ $prodotto_singolo['title'] }}</h2>

    <div class="containerComic">

        <div class="comicCard">

            <div>
                <img src="{{ $prodotto_singolo['thumb'] }}" alt="">
            </div>
            <div>
                <h5>{{ $prodotto_singolo['title'] }}</h5>
                <p>{!! $prodotto_singolo['description'] !!}</p>
            </div>


        </div>

    </div>

@endsection
