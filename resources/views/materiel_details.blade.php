@extends('layouts/admin_master')

@section('page-content')
    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <h1 class="my-4">ETAT:
            <small>Réservé pour Intervention XXXXXXXXX</small>
        </h1>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-7">
                <iframe id="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7949.648656006072!2d5.361920901339417!3d43.30493403062737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9c1b300000001%3A0xc9bd888061c8e8bd!2sMarseille%20Fos%20Port!5e0!3m2!1sen!2sfr!4v1650397502504!5m2!1sen!2sfr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-md-5">
                <dl class="row">
                    <dt class="col-sm-8">Nom du Matériel</dt>
                    <dd class="col-sm-8">XXXXXXXXXXXXXXXXXXXXXXX</dd>

                    <dt class="col-sm-8">Référence</dt>
                    <dd class="col-sm-8">00000000000000000000</dd>

                    <dt class="col-sm-8">Type</dt>
                    <dd class="col-sm-8">XXXXXXXXXXXXXXXXXXXX</dd>

                    <dt class="col-sm-8">Lieu Actuel</dt>
                    <dd class="col-sm-8">XXXXXXXXXXXXXX</dd>

                    <dt class="col-sm-8">Date Arrivée au Lieu Actuel</dt>
                    <dd class="col-sm-8">XX/XX/XXXX</dd>

                    <dt class="col-sm-8">Date Acquisition</dt>
                    <dd class="col-sm-8">XX/XX/XXXX</dd>

                    <dt class="col-sm-8">Date Fin de Validité</dt>
                    <dd class="col-sm-8">XX/XX/XXXX</dd>

                    <dt class="col-sm-8">Nombre de Vérifications Annuelles</dt>
                    <dd class="col-sm-8">XX</dd>

                    <dt class="col-sm-8">Jours Restant pour Controle Technique</dt>
                    <dd class="col-sm-8">XX</dd>

                </dl>
                <button type="button" class="btn btn-primary btn-lg">Historique des Déplacements</button>
                <button type="button" class="btn btn-secondary btn-lg">Modifier</button>
            </div>

        </div>

    </div>
    <!-- /.container -->
@endsection
