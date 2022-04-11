@extends('template')

@section('titre', 'Association - Donate')

@section('content')
<!-- <div class="container">
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

  </form> -->
<!-- </div> -->
<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading">Donation</div>
    <div class="panel-body">
      <form action="" method="POST">
        <div class="form-group">
          <label class="form-label" for="prenom">Prénom</label>
          <input type="text" id="prenom" class="form-control" />
        </div>
        <div class="form-group">
          <label class="form-label" for="nom">Nom</label>
          <input type="text" id="nom" class="form-control" />
        </div>
        <div class="form-group">
          <label for="email">l'adresse email</label>
          <input type="email" class="form-control" id="email" placeholder="nom@exemple.com">
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
        <div>
          <input type="submit" class="btn btn-primary" value="Donate">
        </div>
      </form>
    </div>
  </div>
</div>
<div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci asperiores eum quo et placeat? Delectus porro, similique aperiam dicta rem atque nemo doloribus recusandae non modi necessitatibus dolores temporibus pariatur? Quibusdam doloribus aliquid, eum consequuntur consectetur porro! Minus repellat blanditiis esse porro unde soluta! Eius cupiditate culpa ipsam nulla fugiat! Iusto dicta sed voluptatibus ipsam expedita recusandae nemo blanditiis earum, placeat obcaecati possimus a? Corporis provident aperiam in similique perferendis sequi, recusandae sed doloribus ex voluptatem officiis eligendi facere nulla molestiae eius blanditiis magnam quae. Maxime, consequuntur ea eos numquam quidem quod provident quia minima libero qui. Eveniet, repudiandae eaque!</div>

@stop