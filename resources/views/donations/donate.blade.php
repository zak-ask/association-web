@extends('template')

@section('titre', 'Association - Donate')

@section('content')
<div class="container">
<form>
    <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form3Example1">Prénom</label>
        <input type="text" id="form3Example1" class="form-control" />
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form3Example2">Nom</label>
        <input type="text" id="form3Example2" class="form-control" />
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">l'adresse email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@exemple.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Selectionner votre cause</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>La guerre ukrainienne</option>
      <option>La faim au Yémen</option>
      <option>Catastrophes naturelles en asie</option>
    </select>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">100 DH</label>
    </div>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">500 DH</label>
    </div>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">1000 DH</label>
    </div>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">10,000 DH</label>
    </div>

</form>
</div>


@stop