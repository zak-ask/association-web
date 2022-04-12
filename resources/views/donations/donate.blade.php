@extends('template')

@section('titre', 'Association - Donate')

@section('content')

@if(session('success'))
<div class="alert alert-success">
  <ul>
    <li><strong>{{ session('success')}}</strong> </li>
  </ul>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
  <strong>Whoops!</strong> There were some problems with your input.<br><br>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="container col-md-10 bg-light mt-3 mb-5 border border-success rounded ">
  <form action="{{route('acceuil.store')}}" method="POST" class="form p-3 mb-3">
    @csrf
    <div class="form-group form-group-lg ">
      <label class="form-label" for="nom">Nom</label>
      <input type="text" id="nom" name="nom" class="form-control" />
    </div>
    <div class="form-group form-group-lg">
      <label class="form-label" for="prenom">Prénom</label>
      <input type="text" id="prenom" name="prenom" class="form-control" />
    </div>
    <div class="form-group form-group-lg">
      <label for="email" class="form-label">l'adresse email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="nom@exemple.com">
    </div>
    <div class="form-group form-group-lg">
      <label for="exampleFormControlSelect1" class="form-label">Selectionner votre cause</label>
      <select class="form-control" id="exampleFormControlSelect1" name="cause">
        <option>La guerre ukrainienne</option>
        <option>La faim au Yémen</option>
        <option>Catastrophes naturelles en asie</option>
      </select>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="montant" id="montant" value="100" checked>
      <label class="form-check-label" for="montant">100 DH</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="montant" id="montant" value="500" checked>
      <label class="form-check-label" for="montant">500 DH</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="montant" id="montant" value="1000" checked>
      <label class="form-check-label" for="montant">1000 DH</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="montant" id="montant" value="10000" checked>
      <label class="form-check-label" for="montant">10,000 DH</label>
    </div>
    <div class="form-group form-group-lg text-center " >
      <input type="submit" class="btn btn-success col-md-6 " autocomplete="off" value="Donate">
      <!-- Button trigger modal -->
      <!-- <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal" value="Donate"> -->
    </div>
  </form>
</div>


<div class="m-5"></div>

@endsection