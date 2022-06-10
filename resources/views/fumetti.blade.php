@extends('layouts.app')

@section('content')

<h3 class="current-series">CURRENT SERIES</h3>
<main class="products container pt-5">
    <div class="row row-cols-6 cards-box">
        @forelse($comics as $comic)
            <div class="">
                <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
                <h5 class="pb-2">{{$comic['series']}}</h5>
            </div>
        @empty
        

        @endforelse
    </div>
    <div class="text-center pb-3">
        <a class="btn btn-primary text-uppercase rounded-0" href="#">Load mode</a>
    </div>

    
    <div class="contenitore bg-primary py-5 text-white">
    <div class="">
        <div class="row">
            <div class="col">
                <img width="60" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <span>Digital comics</span>
            </div>
            <div class="col">
                <img width="60" src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                <span>DC MERCHANDISE</span>
            </div>
            <div class="col">
                <img width="60" src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                <span>SUBSCRIPTION</span>
            </div>
            <div class="col">
                <img width="60" src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                <span>COMIC SHOP LOCATOR</span>
            </div>
            <div class="col">
                <img width="60" src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                <span>DC POWER VISA</span>
            </div>
        </div>
    </div>
</div>
</main>



@endsection