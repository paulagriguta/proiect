@extends('layout')

@section('content')


<!------ Include the above in your HEAD tag ---------->

<form action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Log In</legend>
    </div>
    <div class="form-group">
      <!-- Username -->
      <label class="control-label" for="username">Username</label>

      <input class="form-control col-md-6" type="text" id="username" name="username" placeholder="" class="input-xlarge">


    </div>


    <div class="form-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>

      <input class="form-control col-md-6" type="password" id="password" name="password" placeholder="" class="input-xlarge">

    </div>



    <button class="btn btn-success">Sign In</button>

  </fieldset>
</form>
@endsection