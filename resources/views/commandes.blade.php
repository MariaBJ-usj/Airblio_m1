@extends('layouts/client_master')

@section('title')
Commande
@endsection

@section('page-content')
<br>
<div class="container text-black">
  <form class="needs-validation" novalidate>

    <div class="big">
      <div class="medium">

        <div class="col-md-4 mb-3">
          <label for="name">Prénom</label>
          <textarea name="détails" id="ameliorer" rows="1" cols="23"></textarea>
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
        </div>

        <div class="col-md-4 mb-3">
          <label for="lastname">Nom</label>
          <textarea name="détails" id="ameliorer" rows="1" cols="23"></textarea>
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
        </div>

        <div class="col-md-4 mb-3">
          <label for="date"> Date demandée : </label>
          <input type="date" id="date">
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
        </div>

        <div class="col-md-4 mb-3">
          <label for="date"> Type : </label>
          <input id="type">
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
        </div>
      </div>
      <div class="small1">
        <div class="col-md-4 mb-3">
          <label for="Date souhaitée"> Date souhaitée : </label>
          <input type="Date souhaitée" id="date1">
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
        </div>

        <div class="col-md-4 mb-3">
          <label for="Etat"> Etat : </label>
          <input type="Etat" id="Etat">
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="ID Client"> ID Client : </label>
          <input type="ID Client" id="ID Client">
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
        </div>

        <div>
          <label for="Adresse Mail"> Adresse mail : </label>
          <input type="email" placeholder="sophie@example.com">
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
        </div>
        <br>

        <div class="col-md-4 mb-3">
          <label for="Numéro de téléphone"> Numéro de téléphone: </label>
          <input type="Numéro de téléphone" id="Numéro de téléphone">
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
        </div>
      </div>
      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1013.7743679999429!2d2.3725740168018676!3d48.97736721236235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6693022c6c44b%3A0x5df6a7ba879d8230!2sBD%20BOSS!5e0!3m2!1sfr!2sfr!4v1650510920669!5m2!1sfr!2sfr" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div> 
      </div> 
    

    </div>
    <br>
    <div class="bottomGlobal text-black">
        <div class="bottom1">
        <div class="col-md-4 mb-3">
          <label for="date"> Détails de la commande : </label> <br> 
          <textarea name="détails" id="ameliorer" rows="5" cols="65"></textarea>
        </div>

      
        
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="cgu" required>
            <label class="form-check-label" for="cgu">J'accepte les conditions générales d'utilisation et de vente</label>
          <div class="invalid-feedback">Vous devez accepter les CGU pour continuer</div>
          <br>
        </div>
        <div class="bottom2">
          <div>
            <button class="btn btn-primary" type="submit">Envoyer au responsable</button>
            <button class="btn btn-primary" type="submit">Annuler</button>
          </div>
          
        </div>
      </div>
    </div>
    


  

   
  </form>
</div>
<script>
  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1).toString().padStart(2, "0")+'-'+today.getDate();
  document.getElementById("date").setAttribute("value", date);
  document.getElementById("date").setAttribute("min", date);

  var today1 = new Date();
  var date1 = today1.getFullYear()+'-'+(today1.getMonth()+1).toString().padStart(2, "0")+'-'+today1.getDate();
  document.getElementById("date1").setAttribute("value", date1);
  document.getElementById("date1").setAttribute("min", date1);



  /*La fonction principale de ce script est d'empêcher l'envoi du formulaire si un champ a été mal rempli
   *et d'appliquer les styles de validation aux différents éléments de formulaire*/
  (function () {
    'use strict';
    window.addEventListener('load', function () {
      let forms = document.getElementsByClassName('needs-validation');
      let validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>
@endsection