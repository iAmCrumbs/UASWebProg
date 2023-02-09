@extends('template')

@section('title', 'Update Role')

@section('content')

<div class="container-fluid">
    <form action= "/Update/{{$user->id}}" method="POST">
        @csrf
        <div class="mb-3 row">
            <p>{{$user->first_name}} {{$user->last_name}}</p>
        </div>
        <div class="mb-3 row">
            <label for="role" class="col-sm-2 col-form-label me-2">Role:</label>
            <div class="col-sm-4">
                <select name="roles_id" id="role" class="col-12 p-2 border-secondary">
                    @foreach ($roles as $role)
                        @if($user->role == $role)
                            <option value="{{$role->id}}" selected>{{$role->role_name}}</option>
                            @else
                            <option value="{{$role->id}}">{{$role->role_name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row m-5">
            <div class="col-sm-6 text-center">
                <button type="submit" class="btn btn-warning col-sm-4">Save</button>
            </div>
        </div>
    </form>
</div>

@endsection
