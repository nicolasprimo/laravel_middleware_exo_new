@extends('template.main')

@section('content')
<div class="card">
    <div class="card-header">Articles</div>
    <div class="card-body">
      <table class="table table-striped">
      <thead>
          <tr>
          <th scope="col">Titre</th>
          <th scope="col">Auteur</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($articles as $article)
          <tr>
          <td><a href="{{route('article.showMembre',$article)}}" class="">{{$article->titre}}</a></td>
          <td>{{$article->user->name}}</td>        
          </tr>                                 
          @endforeach
      </tbody>
      </table>
      {{ $articles->links() }}
    </div>
</div>
@endsection