
@php
    $comics = config('comics');
@endphp

<div class="bg-dark">
<div class="container">
    <div class="row pt-4">
        @foreach($comics as $comic)
        <div class="col-md-2"> <!-- Cambia la classe col-md-4 a seconda delle dimensioni desiderate -->
            <div class="card mb-4 bg-dark text-white border-0">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic['title'] }}</h5>
                    {{-- <p class="card-text">Series: {{ $comic['series'] }}</p> --}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center pb-3">
        <button class="btn btn-primary px-4 py-0 rounded-0">
          LOAD MORE
        </button>
      </div>
</div>
</div>
