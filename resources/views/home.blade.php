@extends ('layouts.main')

@section('main')
<section class="bg-dark py-3">
    <div class="container">
        <h3 class="text-white text-uppercase py-1 px-3">{{$elenco_film}}</h3>
    </div>

    <div id="grid-films" class="d-flex justify-content-center py-4 mb-0">
        <div class="container row d-flex">
            @foreach ($films as $film)

            <div class="col-2 pb-0 d-flex flex-column">
                <img class="ec-img img-fluid" src="{{ $film['thumb'] }}" alt="{{ $film['title']}}">
                <h6 class="text-uppercase text-white mt-2">{{ $film['series']}}</h6>
            </div>
            @endforeach
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-primary rounded-0 px-5">LOAD MORE</button>
    </div>
</section>
@endsection
