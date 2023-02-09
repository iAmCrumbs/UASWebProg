@extends('template')

@section('title', 'Check Out')

@section('content')
<div class="d-flex align-items-center justify-content-center" style="height: 500px; width: 500px; border-radius: 50%; background-color:white; border: solid 10px #ff0; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <div class="text-center">
        <h1>{{__('localization.success')}}</h1>
        <p>{{__('localization.contact')}}</p>
        <a href="/Home">{{__('localization.home')}}"</a>
    </div>
</div>
@endsection
