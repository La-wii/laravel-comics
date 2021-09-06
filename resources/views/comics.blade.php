@extends('layout.app')
@section('title', 'DC Comics - Home')
@section('content')
    <!--  start container -->
    <div class="container">
        <div class="row">
            @foreach ($comics as $items)
                <div class="col-3">
                    <div class="card" style="width: 13rem;">
                        <img class="card-img-top" src="{{$items['thumb']}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$items['series']}}</h5>
                        </div>
                    </div>
                </div>
                <!-- <img src="{{$items['thumb']}}" alt="">
                <p>{{$items['title']}}</p> -->
            @endforeach
        </div>    
    </div>
    <!--  end container -->
@endsection