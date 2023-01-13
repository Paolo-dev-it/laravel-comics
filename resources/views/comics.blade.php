@extends('layout.app')

@section('page-title', 'DC Comics - Prodotto')

@section('main-content')


    <div class="single-cont">
        <h2> {{ $prodotto_singolo['title'] }}</h2>
        <div class="price">
            <div class="left-price">
                <p> U.S. Price: {{ $prodotto_singolo['price'] }} </p>

            </div>

            <div class="right-price">
                <p>available</p>
                <p>check Availability</p>
            </div>
        </div>

        <div>
            <img src="{{ $prodotto_singolo['thumb'] }}" alt="">
        </div>
        <div>
            <h5>{{ $prodotto_singolo['title'] }}</h5>
            <p class="card-desc">{!! $prodotto_singolo['description'] !!}</p>
        </div>
    </div>

@endsection
