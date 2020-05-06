@extends('layouts.app')

@section('title', 'Index Bien')

@section('content')

  <div class="row justify-content-center">
          <div class="col-md-12">
               <div class="card">
  <table class="table">
  <div class="card-header">Offre de bien disponible</div>
    <thead>
    
      <tr>
        <td>ID</td>
        <td>Type de bien</td>
        <td>Description du bien</td>
        <td>Surface du bien</td>
        <td>localisation du bien</td>
        <td>Actions</td>
      </tr>
    </thead>
    <tbody>
      @foreach($biens as $bien)
        <tr>
          <td>{{$bien->id}}</td>
          <td>{{$bien->type}}</td>
          <td>{{$bien->content}}</td>
          <td>{{$bien->surfacearea}}</td>
          <td>{{$bien->localisation}}</td>

    
          
          <td>
              <a class="btn btn-success" href="{{ route('biens.showuser', $bien->id) }}">Voir le bien</a>
          </td>
          <td><a class="btn btn-warning" href="{{ route('biens.edit', $bien->id) }}">Modifier l&lsquo;annonce</a></td>
           <td>
             <form action="{{ route('biens.destroy', $bien->id)}}" method="post">
             @csrf
             @method('DELETE')
               <button class="btn btn-danger" type="submit">Supprimer l&lsquo;annonce</button>
             </form>
           </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </div>
  </div>
  @endsection