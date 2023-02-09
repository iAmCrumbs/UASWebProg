@extends('template')

@section('title', 'Cart')

@section('content')

<div class="container-fluid">
    <h1>{{__('localization.cart')}}</h1>
    @foreach ($items as $item)
    <div class="row justify-content-center d-flex align-items-center mb-2 text-center">
        <div class="col-2">
            {{$item->image_url}}
        </div>
        <div class="col-3">{{$item->name}}</div>
        <div class="col-3">Rp. {{$item->price}}</div>
        <div class="col-3"><a href="/RemoveCart/{{$item->id}}">Delete</a></div>
    </div>

    @endforeach
    <div class="col-10 mt-5 justify-content-end d-flex align-items-center">
        TOTAL: Rp. {{$total}}

        <form action="/Checkout" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary m-2">Check Out</button>
        </form>
    </div>
</div>

@endsection
