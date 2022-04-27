@extends('layouts/client_master')

@section('title')
Sign-up
@endsection

@section('page-content')
<section class="h-100">
  <div class="container py-5 h-100 mx-5">
    <div class="row d-flex justify-content-center align-items-center h-100 mx-5">
      <div class="col mx-5">
        <div class="card card-registration my-4 mx-5">
          <div class="row g-0">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Inscription</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example1m">Prénom</label>
                      <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example1n">Nom</label>
                      <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <label for="birthDate" class="form-label">Date de naissance</label>
                  <input type="date" id="birthDate" class="form-control form-control-lg">
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example8">Lieu de naissance</label>
                  <input type="text" id="form3Example8" class="form-control form-control-lg" />
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Sexe :</h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="option1" />
                    <label class="form-check-label" for="femaleGender">Homme</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">Femme</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
                    <label class="form-check-label" for="otherGender">Autre</label>
                  </div>

                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example97">Adresse mail</label>
                  <input type="text" id="form3Example97" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example97">Mot de passe</label>
                  <input type="password" id="form3Example97" class="form-control form-control-lg" />
                </div>

                <div class="d-flex justify-content-center">
                  <button type="button" class="btn btn-warning btn-lg ms-2">S'enregistrer</button>
                </div>

              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection