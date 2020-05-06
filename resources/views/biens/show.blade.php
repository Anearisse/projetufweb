@extends('layouts.app')

@section('title', 'Voir le Bien')

@section('content')


  <div class="row justify-content-center">
          <div class="col-md-12">
               <div class="card">
  <table class="table">
  <div class="card-header">D&eacute;tail de l&lsquo;offre de bien</div>
    <thead>
    
      <tr>
        <td>ID</td>
        <td>Type de bien</td>
        <td>Description du bien</td>
        <td>localisation du bien</td>
        <td>Surface du bien</td>
        <td>Nombre de pi&egrave;ce</td>
        <td>Prix du bien</td>
        <td>Image du bien</td>
        <td>Date de cr&eacute;ation du bien</td>
      </tr>
    </thead>
    <tbody>

        <tr>
          <td>{{$bien->id}}</td>
          <td>{{$bien->type}}</td>
          <td>{{$bien->content}}</td>
          <td>{{$bien->localisation}}</td>
          <td>{{$bien->surfacearea}}</td>
          <td>{{$bien->numberroom}}</td>
          <td>{{$bien->price}} &euro;</td>
           <td>{{$bien->image}}</td>
          <td>{{ date('d-m-Y', strtotime($bien->created_at)) }}</td>
        </tr>

    </tbody>
  </table>
  </div>
  </div>
  </div>
  
  
  @endsection