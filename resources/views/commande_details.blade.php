@extends('layouts/admin_master')

@section('page-content')
    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <h1 class="my-4">Commande XXXXXXXXX</h1>

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
                    <dt class="col-sm-8">Client</dt>
                    <dd class="col-sm-8">XXXXXXXXXXXX XXXXXXXXXXX</dd>

                    <dt class="col-sm-8">Adresses Mail du Client</dt>
                    <dd class="col-sm-8">XXXXXXXX@XXXXXXX.XXX</dd>

                    <dt class="col-sm-8">Telephone du Client</dt>
                    <dd class="col-sm-8">+33 333333333</dd>

                    <dt class="col-sm-8">Date de la Demande</dt>
                    <dd class="col-sm-8">XX/XX/XXXX</dd>

                    <dt class="col-sm-8">Type</dt>
                    <dd class="col-sm-8">Nouvelle Intervention</dd>

                    <dt class="col-sm-8">Date Souhaitée</dt>
                    <dd class="col-sm-8">XX/XX/XXXX</dd>

                    <dt class="col-sm-8">Etat</dt>
                    <dd class="col-sm-8">XXXXXXXX</dd>

                    <dt class="col-sm-8">Lieu</dt>
                    <dd class="col-sm-8">XXXXXXXXXXXXXX</dd>

                </dl>
            </div>
            <div class="feature col">
                <h4>Description</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="feature">
                <button type="button" class="btn btn-primary btn-lg">Accepter et Envoyer au Responsable</button>
                <button type="button" class="btn btn-secondary btn-lg">Annuler</button>
            </div>
            
        </div>

    </div>
    <!-- /.container -->
@endsection
