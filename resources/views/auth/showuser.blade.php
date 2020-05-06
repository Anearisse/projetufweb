@extends('layouts.app')

@section('title', 'Votre Profile')

@section('content')


  <div class="row justify-content-center">
          <div class="col-md-12">
               <div class="card">
  <table class="table">
  <div class="card-header">D&eacute;tail de l&lsquo;offre de bien</div>
    <thead>
    
      <tr>
        <td>ID</td>
        <td>name</td>
        <td>email</td>
        <td>password</td>
        <td>Date de création du compte</td>
      </tr>
    </thead>
    <tbody>

        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->password}}</td>
          <td>{{ date('d-m-Y', strtotime($user->created_at)) }}</td>
        </tr>

    </tbody>
  </table>
  </div>
  </div>
  </div>
  
  
  @endsection