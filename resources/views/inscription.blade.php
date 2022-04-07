@extends('default')

@section('page-content')
    
<form method="post" action="inscription">
    <fieldset>
        <legend>Inscription</legend>

        <label for="nom">Nom </label>
        <input type="text" id="nom" name="nom" value="" />
        <br />

        <label for="prenom">Prénom </label>
        <input type="text" id="prenom" name="prenom" value="" />
        <br />

        <label for="email">Email </label>
        <input type="email" id="email" name="email" value="" />
        <br />

        <label for="password">Mot de passe </label>
        <input type="password" id="password" name="password" value="" />
        <br />
        
        <label for="confirmation">Confirmation du mot de passe </label>
        <input type="password" id="confirmation" name="confirmation" value="" />
        <br />

        <input type="submit" value="S'inscrire" />
        <br />
    </fieldset>

@endsection