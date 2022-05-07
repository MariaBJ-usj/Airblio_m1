<?php
  use Illuminate\Support\Facades\DB;
  $mail=Auth::user()->email;
  $mdp=Auth::user()->password;
  $client = DB::table('clients')
    ->where('mail', $mail)
    ->where('mdp', $mdp)
    ->first();
?>
@extends('layouts/client_master')

@section('page-content')
  <section id="about_section" class="py-5 text-center container">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Demande d'Intervention</h1>
    </div>
  </section>
  <?php if (isset($_POST["gridRadios"]) && isset($_POST["date"]) && isset($_POST["description"])) { ?>
  <p>Bonjour, vous nous avez bien sollicité pour une <?php echo $_POST["gridRadios"] ?>, le <?php echo $_POST["date"] ?> à l'adresse "<?php echo $_POST["places"] ?>".</p>
  <p>La description de cettes commande est : <?php echo $_POST["description"] ?>.</p>
  <?php

    $idSite = DB::table('sites')->insertGetId(
      array(
        'latitude' => $_POST["latitude"],
        'longitude' => $_POST["longitude"],
        'denomination'=> $_POST["places"],
      )
    );
    DB::table('commande')->insert(
      array(
        'idC' => $client->idC,
        'dateCreation' => date('Y-m-d'),
        'type' => $_POST["gridRadios"],
        'dateSouhaitee' => $_POST["date"],
        'etat' => 'EN_ATTENTE',
        'devisAccept' => 0,
        'idSite' => $idSite,
        'Description' => $_POST["description"],
      )
    );
  } else {
  ?>
  <form action="demande_intervention" method="POST">
    @csrf
    <div class="d-flex justify-content-around">
      <div style="width: 40%">
        <fieldset class="form-group">
          <div class="row">
            <legend class="col-form-label col-sm-5 pt-0">Type d'intervention</legend>
            <div class="col-sm-5">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Nouvelle installation" checked>
                <label class="form-check-label" for="gridRadios">Nouvelle installation</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Maintenance">
                <label class="form-check-label" for="gridRadios">Maintenance</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Intervention urgente">
                <label class="form-check-label" for="gridRadios">Intervention urgente</label>
              </div>
            </div>
          </div>
        </fieldset>
        <br />
        <div class="row form-group">
          <label for="date" class="col-sm-1 col-form-label">Date</label>
          <div class="col-sm-4">
            <input type="date" class="form-control" id="date" name="date">
          </div>
        </div><br />
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Descriptif de l'intervention</label>
          <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </div>

      <div style="width: 40%">
        <div id="map" class="map-container" style="height: 350px; width: 100%"></div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiL8XJNvgWBPbLETYSRbgp7fPe7OZgEUA&callback=initializeMap" defer></script>
        <h3>Adresse : <p id="placesShow"></p></h3>
      </div>
    </div>

    <input type="hidden" id="lat" name="latitude" value="">
    <input type="hidden" id="lng" name="longitude" value="">
    <input type="hidden" id="places" name="places" value="">

    <section id="about_section" class="py-5 text-center container">
      <div class="col-lg-6 col-md-8 mx-auto">
        <button type="submit" class="btn btn-primary mb-2">Envoyer</button>
      </div>
    </section>
  </form>
  <?php } ?>
@endsection
