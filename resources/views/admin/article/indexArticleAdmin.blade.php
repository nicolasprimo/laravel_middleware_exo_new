@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('template.navAdmin')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Articles <a href="{{route('article.create')}}" class="btn btn-success btn-sm float-right">Créer</a></div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Auteur</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                            <tr>
                            <th scope="row">{{$article->id}}</th>
                            <td>{{$article->titre}}</td>
                            <td>{{$article->user->name}}</td>
                            <td><a href="{{route('article.show',$article)}}" class="btn btn-primary btn-sm float-right">Show</a></td>
                            </tr>                                 
                            @endforeach
                        </tbody>
                        </table>
                        {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
