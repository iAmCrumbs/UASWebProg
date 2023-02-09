@extends('template')

@section('title', 'Login')

@section('content')
<form action="/Login" method="POST">
    @csrf
    <div class="mb-3">
        <h1>Login</h1>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email:</label>
        <div class="col-sm-3">
            <input type="email" name="email" class="form-control" id="email">
        </div>
    </div>
    <div class="mb-5 row">
        <label for="password" class="col-sm-2 col-form-label">{{__('localization.Register.pass')}}</label>
        <div class="col-sm-3">
            <input type="password" name="password" class="form-control" id="password">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-5 text-center">
            <button type="submit" class="btn btn-warning col-sm-3">Submit</button>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5 text-center">
            <a href="/Register">Already Have An Account? Login Here</a>
        </div>
    </div>
</form>
@endsection
