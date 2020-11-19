@extends('layout')


@section('content')



<form action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Înregistrare</legend>
    </div>
    <div class="form-group">
      <!-- Username -->
      <label class="control-label" for="nume">Nume</label>
      <input class="form-control col-md-6" type="text" id="nume" name="nume" placeholder="" class="input-xlarge">
    </div>
    <div class="form-group">
      <!-- Username -->
      <label class="control-label" for="username">Prenume</label>

      <input class="form-control col-md-6" type="text" id="prenume" name="prenume" placeholder="" class="input-xlarge">


    </div>
    <div class="form-group">
      <!-- Username -->
      <label class="control-label" for="username">Username</label>

      <input class="form-control col-md-6" type="text" id="username" name="username" placeholder="" class="input-xlarge">


    </div>
    <div class="form-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>

      <input class="form-control col-md-6" type="email" id="email" name="email" placeholder="" class="input-xlarge">

    </div>

    <div class="form-group">
      <!-- Password-->
      <label class="control-label" for="password">Parolă</label>

      <input class="form-control col-md-6" type="password" id="password" name="password" placeholder="" class="input-xlarge">


    </div>

    <div class="form-group">
      <!-- Password -->
      <label class="control-label" for="password_confirm">Confirmare parolă</label>

      <input class="form-control col-md-6" type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">

    </div>



    <button class="btn btn-success">Înregistrare</button>

  </fieldset>
</form>
@endsection