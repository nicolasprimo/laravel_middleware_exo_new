@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('template.navAdmin')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role->name}}</td>
                            </tr>                                 
                            @endforeach
                        </tbody>
                        </table>                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
