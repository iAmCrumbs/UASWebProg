@extends('template')

@section('title', 'Item Detail')

@section('content')
    <div class="container-fluid d-flex justify-content-center">
        <div class="col-12">
            <h1>{{$items->item_name}}</h1>
            <div class="card bg-light">
                <img src="{{asset($items->image_url)}}" class="w-25">
            </div>
            <div>
                <p class="font-weight-bold">Price: {{$items->price}}</p>
                <p>{{$items->item_desc}}</p>
                <a href="/Buy/{{$items->id}}" class="btn btn-warning">Buy</a>

            </div>
        </div>
    </div>
@endsection
