@extends('template')

@section('title', 'Home')

@section('content')

<div class="container-fluid d-flex flex-column justify-content-center align-items-center">
    <div class="row">
        @foreach ($items as $item)
        <div class="card mx-3 my-3" style="width: 18rem">
            <img src="{{asset($item->image_url)}}" class="img-fluid card-img-top">
            <div class="card-boy">
                <p>
                    {{$item->item_name}}
                </p>
                <a href="/ItemDetail/{{$item->id}}" title="ItemDetail" class="text-primary">{{__('localization.detail')}}</a>

            </div>

        </div>

        @endforeach
        <div class="mx-auto">
            {{$items->links()}}
        </div>
    </div>

</div>

@endsection
