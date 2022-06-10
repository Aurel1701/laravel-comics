@extends('layouts.app')

@section('content')

<h3 class="current-series">CURRENT SERIES</h3>
<section class="container">
<div class="">
    <div class="container">
        <h1>Current Series</h1>
        <div class="">
            @forelse($comics as $comic)
            <div class="col">
                <div class="comic">
                    <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
                    <p>{{$comic['series']}}</p>
                </div>
            </div>
            @endforelse
        </div>
    </div>


    <div class="text-center">
        <a class="" href="#">Load mode</a>
    </div>

</section>



@endsection