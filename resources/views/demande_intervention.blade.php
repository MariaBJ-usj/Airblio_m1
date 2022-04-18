@extends('layouts/client_master')

@section('page-content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajouter une mission d'intervention</title>
        <link type="text/css" rel="stylesheet" href="form.css" />
    </head>
    <body>
        <form id="demande_intervention" class="row g-3">
            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Intitulé de l'intervention</label>
              <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
            </div>
            <div class="col-md-4">
              <label for="validationDefault02" class="form-label">Last name</label>
              <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
            </div>
            <div class="col-md-4">
              <label for="validationDefaultUsername" class="form-label">Username</label>
              <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationDefault03" class="form-label">City</label>
              <input type="text" class="form-control" id="validationDefault03" required>
            </div>
            <div class="col-md-3">
              <label for="validationDefault04" class="form-label">State</label>
              <select class="form-select" id="validationDefault04" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="validationDefault05" class="form-label">Zip</label>
              <input type="text" class="form-control" id="validationDefault05" required>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                  Agree to terms and conditions
                </label>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
          </form>
        <form method="post">
            <fieldset>
                <legend>Ajout d'une mission d'intervention</legend>

                <label for="commande">Commande </label>
                <input type="number" id="commande" name="commande" value="" />
                <br />

                <label for="intitule">Intitulé de l'intervention </label>
                <input type="text" id="intitule" name="intitule" value="" />
                <br />

                <label for="volume">Volume horaire total </label>
                <input type="number" id="volume" name="volume" value="" />
                <br />

                <label for="prix">Prix total TTC </label>
                <input type="number" id="prix" name="prix" value="" />
                <br />

                <label for="tva">TVA </label>
                <input type="number" id="tva" name="tva" value="" />
                <br />

                <label for="detail">Détail </label>
                <input type="text" id="detail" name="detail" value="" />
                <br />

                <label for="lieu_depart">Lieu de départ de l'équipe </label>
                <input type="text" id="lieu_depart" name="lieu_depart" value="" />
                <br />

                <label for="procedure">Procédure de la mission </label>
                <input type="text" id="procedure" name="procedure" value="" />
                <br />

                <label for="nb_heure">Nombre d'heure de travail de l'équipe </label>
                <input type="number" id="nb_heure" name="nb_heure" value="" />
                <br />

                <label for="nb_jour">Nombre de jour de location du matériel </label>
                <input type="number" id="nb_jour" name="nb_jour" value="" />
                <br />

                <input type="submit" value="Ajouter" />
                <br />
            </fieldset>
        </form>
    </body>
</html>

@endsection