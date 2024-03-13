@extends ('layouts.main')

@section('main')
<section>
    <h2>{{$elenco_film}}</h2>
    <ul>
        @foreach ($films as $film)
        <li>
            <img src="{{ $film['thumb'] }}" alt="{{ $film['title']}}">
            <h6>{{ $film['series']}}</h6>
        </li>
        @endforeach
    </ul>
</section>
@endsection
