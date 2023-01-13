@extends('layout.app')

@section('page-title', 'DC Comics - Prodotto')

@section('main-content')


    <div class="single-cont">
        <div>
            <h2> {{ $prodotto_singolo['title'] }}</h2>
            <div class="price">
                <div class="left-price">
                    <p> U.S. Price: {{ $prodotto_singolo['price'] }} </p>
                </div>

                <div class="right-price">
                    <p>available</p>
                    <button>Check Availability &darr;</button>
                </div>
            </div>

            <div class="img">
                <img src="{{ $prodotto_singolo['thumb'] }}" alt="">
            </div>

            <div>
                <p class="card-desc">{!! $prodotto_singolo['description'] !!}</p>
            </div>
        </div>

        <div class="second-cont">
            <div class="talent-sec">
                <h3>Talent</h3>


                <div class="art">
                    <div>Art by:</div>
                    <div>
                        @foreach ($prodotto_singolo['artists'] as $artist)
                            <span> {{ $artist }},</span>
                        @endforeach
                    </div>

                </div>
                <div class="aut">
                    <div>Written by:</div>
                    <div>
                        @foreach ($prodotto_singolo['writers'] as $writers)
                            <span>{{ $writers }},</span>
                        @endforeach
                    </div>

                </div>



            </div>
            <div class="specs-sec">
                <h3>Specs</h3>
                <p>Series: <span>{{ $prodotto_singolo['series'] }}</span> </p>
                <p>U.S. Price: <span>{{ $prodotto_singolo['price'] }}</span> </p>
                <p>On Sale Date: <span>{{ $prodotto_singolo['sale_date'] }}</span> </p>
            </div>
        </div>
    </div>



@endsection
