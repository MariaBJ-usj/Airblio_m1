@extends('layouts/client_master')

@section('title')
Connexion
@endsection

@section('page-content')
<div class="text-center form-signin text-black">
  <form>
    <img class="mb-4" src="{{url('/logos/png/Color logo - no background.png')}}" alt="" height="57">
    <h1 id="nav" class="h3 mb-3 fw-normal ">Se connecter</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Adresse mail</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Mot de passe</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Se souvenir de moi
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
  </form>
</div>
@endsection