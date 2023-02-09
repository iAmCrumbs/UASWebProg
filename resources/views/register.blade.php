@extends('template')

@section('title', 'Register')

@section('content')

<div class="container">
    <form action="/Register" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <h1>
                Register
            </h1>
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
            <label for="first_name" class="col-sm-2 col-form-label me-2">First Name:</label>
            <div class="col-sm-3">
                <input type="text" name="first_name" class="form-control border-secondary" id="first_name">
            </div>
            <div class="col-1"></div>
            <label for="last_name" class="col-sm-2 col-form-label me-2">Last Name:</label>
            <div class="col-sm-3">
                <input type="text" name="last_name" class="form-control border-secondary" id="last_name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label me-2">Email:</label>
            <div class="col-sm-3">
                <input type="email" name="email" class="form-control border-secondary" id="email">
            </div>
            <div class="col-1"></div>
            <label for="role" class="col-sm-2 col-form-label me-3">Role:</label>
            <div class="col-sm-3">
                <select name="role" id="role" class="col-12 p-2 border-secondary">
                    @foreach ($roles as $role)
                        <option value="{{$role->id}}">{{$role->role_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="gender" class="col-sm-2 col-form-label me-2">Gender:</label>
            <div class="col-sm-3">
                @foreach ($genders as $gender)
                    <input type="radio" name="gender" id="{{$gender->id}}" value="{{$gender->id}}"> <label for="{{$gender->id}}">{{$gender->gender_desc}}</label>
                @endforeach
            </div>
            <div class="col-1"></div>
            <label for="display_picture" class="col-sm-2 col-form-label me-3">Display Picture:</label>
            <div class="col-sm-3">
                <input type="file" name="display_picture_link" class="form-control border-secondary" id="display_picture">
            </div>
        </div>
        <div class="mb-5 row">
            <label for="password" class="col-sm-2 col-form-label me-2">Password:</label>
            <div class="col-sm-3">
                <input type="password" name="password" class="form-control border-secondary" id="password">
            </div>
            <div class="col-1"></div>
            <label for="password_confirmation" class="col-sm-2 col-form-label me-2">Confirm Password:</label>
            <div class="col-sm-3">
                <input type="password" name="password_confirmation" class="form-control border-secondary" id="password_confirmation">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-warning col-3">Submit</button>
            </div>
        </div>
        <div class="row">
            <div class="text-center">
                <a href="/Login">Already Have An Account? Login Here</a>
            </div>
        </div>
    </form>

</div>

@endsection
