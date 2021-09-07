@extends('layout.app')
@section('title', 'DC Comics - Home')
@section('content')
    <!--  start container -->
    <div class="container">
        <div class="row my-4">
            @foreach ($comics as $key => $items)
                <div class="col-3">
                    <div class="card mb-2 border-light" style="width: 13rem;">
                        <img class="card-img-top" src="{{$items['thumb']}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <a href="{{route('dettaglio', ['id' => $key])}}">{{$items['series']}}
                                </a>  
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- <img src="{{$items['thumb']}}" alt="">
                <p>{{$items['title']}}</p> -->
            @endforeach
        </div>
    </div>
    <!--  end container -->

    <div class="products">

        <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="" class="prod-img">
        <a href="#">Digital Comics</a>

        <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="" class="prod-img">
        <a href="#">Comics Merchandise</a>

        <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="" class="prod-img">
        <a href="#">Shop Locator</a>

        <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="" class="prod-img">
        <a href="#">Subscriptions</a>

        <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="" class="prod-img">
        <a href="#">Dc Power Visa</a>
    </div>
@endsection