@extends('layout.app')
@section('title', 'DC Comics - Dettagli')
@section('content')
<div class="container">

    <div class="row my-5">
        <div class="col-12">
            <h1>{{$risultato['title']}}</h1>
        </div>
    </div>

    <div class="row my-5 bg-success text-light py-2">
        <div class="col-6">
            <p>U.S Price:  {{$risultato['price']}}</p>
        </div>
        <div class="col-2">
            <p>Sale date:  {{$risultato['sale_date']}}</p>
        </div>
        <div class="col-2">
            <p>Check Availability</p>
        </div>
    </div>

    <div class="row">
        <div class="col-9">
            <p>{{$risultato['description']}}</p>
        </div>

        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$risultato['thumb']}}" alt="{$risultato['title']}}">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection