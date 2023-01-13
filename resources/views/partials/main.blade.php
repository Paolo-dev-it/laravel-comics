{{-- <main>

    <div class="containerComic">
        @foreach ($comic as $elem)
            <div class="comicCard">
                <div>
                    <img src="{{ $elem['thumb'] }}" alt="">
                </div>
                <div>
                    <h5>{{ $elem['title'] }}</h5>
                </div>
            </div>
        @endforeach
    </div>

</main> --}}
@section('main-content')
    <main>

        <div class="containerComic">
            @foreach ($comic as $key => $elem)
                <div class="comicCard">
                    <a href="{{ route('show.comic', compact('key')) }}">
                        <div>
                            <img src="{{ $elem['thumb'] }}" alt="">
                        </div>
                        <div>
                            <h5>{{ $elem['title'] }}</h5>
                            <p>{!! $elem['description'] !!}</p>
                        </div>
                    </a>

                </div>
            @endforeach
        </div>

    </main>
@endsection
