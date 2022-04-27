@extends('layouts/client_master')

@section('title')
Forgotten password
@endsection

@section('page-content')
<section class="h-100">
  <div class="container py-5 h-100 mx-5">
    <div class="row d-flex justify-content-center align-items-center h-100 mx-5">
      <div class="col mx-5">
        <div class="card card-registration my-4 mx-5">
          <div class="row g-0">
              <div class="card-body p-md-5 text-black">
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example97">Adresse mail</label>
                  <input type="text" id="form3Example97" class="form-control form-control-lg" />
                </div>

                <div class="d-flex justify-content-center">
                  <button type="button" class="btn btn-warning btn-lg ms-2">Récuperer le mot de passe</button>
                </div>

              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection