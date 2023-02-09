@extends('template')

@section('title', 'Account Management')

@section('content')

<div class="container">
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">ACCOUNT</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->first_name}} {{$user->last_name}} - {{$user->roles_id == 1 ? "User": "Admin"}}</td>
                    <td>
                        <a href="/Update/{{$user->id}}">{{__('localization.roleupdate')}}</a>
                        <a href="/Delete/{{$user->id}}">{{__('localization.delete')}}</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection
