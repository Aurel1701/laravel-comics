@extends('layouts.app')

@section('content')

<h3 class="current-series">CURRENT SERIES</h3>
<section class="products container">
    <h1>Pasta</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
        @forelse($data as $comic)
        <div class="col">
            <div class="">
                <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
                <h5 class="pb-2">{{$comic['series']}}</h5>
            </div>
        </div>

        @empty
        

        @endforelse
    </div>

</section>



@endsection