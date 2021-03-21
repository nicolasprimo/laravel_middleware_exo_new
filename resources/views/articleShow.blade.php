@extends('template.main')

@section('content')
    <a href="{{url()->previous()}}">Retour</a>
    <div class="card-body">
        <div class="card">
            <div class="card-header">{{$article->titre}} </div>

            <div class="card-body">
                {{$article->texte}}
                <h6 class="text-muted">Ecrit par : {{$article->user->name}}</h6>
            </div>
        </div>
    </div>
@endsection