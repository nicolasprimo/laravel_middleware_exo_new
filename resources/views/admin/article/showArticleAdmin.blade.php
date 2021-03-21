@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('template.navAdmin')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$article->titre}} </div>

                <div class="card-body">
                    {{$article->texte}}
                    <h6 class="text-muted">Ecrit par : {{$article->user->name}}</h6>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{route('article.edit',$article)}}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{route('article.destroy',$article)}}" method="post" class="d-inline-block">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
