<?php
use Illuminate\Support\Facades\DB;

$order = DB::table('commande')
    ->join('clients', 'clients.idC', '=', 'commande.idC')
    ->join('intervention', 'commande.idCom', '=', 'intervention.idCommande')
    ->join('employé', 'employé.idEq', '=', 'intervention.idExpert')
    ->join('sites', 'sites.idSite', '=', 'commande.idSite')
    ->where('idCom', $id)
    ->first();

$idInter = $order->idIntervention;

$materials = DB::table('materiel_intervention')
    ->join('materiel', 'materiel.refMat', '=', 'materiel_intervention.refMat')
    ->where('idInter', $idInter)
    ->get();

if (isset($_POST['approve'])) {
    DB::table('commande')
        ->where('idCom', $id)
        ->update(['etat' => 'TERMINEE']);
    header('Location: ' . URL::to('/demandes_etudes'), true, 302);
    exit();
}
if (isset($_POST['refuse'])) {
    DB::table('commande')
        ->where('idCom', $id)
        ->update(['etat' => 'ANNULEE']);
    header('Location: ' . URL::to('/demandes_etudes'), true, 302);
    exit();
}

?>

<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        const uluru = {
            lat: <?php echo $order->latitude; ?>,
            lng: <?php echo $order->longitude; ?>
        };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
        });
    }

    window.initMap = initMap;
</script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Intervention') }} {{ $order->idIntervention }}
        </h2>

    </x-slot>
    <form action="{{ route('demande_etude_details_post', [$id]) }}" method="POST">
        @csrf
        <!-- {{ csrf_field() }} -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <script>
                        $(document).ready(function() {
                            $('#example').DataTable();
                        });
                    </script>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <!-- Page Content -->
                                <div class="container">

                                    <!-- Portfolio Item Row -->
                                    <div class="row">
                                        <p class="font-bold text-l leading-tight h2 text-center">
                                            {{ __('Fiche Intervention') }} {{ $order->idIntervention }}
                                        </p>
                                        <div class="text-center mb-3 col-md-12">
                                            <div id="map" class="map-container mt-5" style="height: 350px; width: 50%"></div>
                                                <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiL8XJNvgWBPbLETYSRbgp7fPe7OZgEUA&callback=initMap"
                                                                                                defer></script>
                                            
                                        </div>

                                        <div class="col-md-6 mt-4">
                                            <dl class="row">
                                                <dt class="col-sm-8">Client</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->prenomC; ?> <?php echo $order->nomC; ?></dd>

                                                <dt class="col-sm-8">Adresses Mail du Client</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->mail; ?></dd>

                                                <dt class="col-sm-8">Telephone du Client</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->tel; ?></dd>
                                            </dl>
                                        </div>

                                        <div class="col-md-6 mt-4">
                                            <dl class="row">
                                                <dt class="col-sm-8">Date du Début</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->dateDébut; ?></dd>

                                                <dt class="col-sm-8">Date de Fin</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->dateFin; ?></dd>

                                                <dt class="col-sm-8">Lieu</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->denomination; ?></dd>
                                            </dl>
                                        </div>

                                        <div class="col-md-6 mt-4">
                                            <dl class="row">
                                                <dt class="col-sm-8">Type</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->type; ?></dd>

                                                <dt class="col-sm-8">Procédure</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->procédure; ?></dd>

                                                <dt class="col-sm-8">Profondeur</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->profondeur; ?> mètres</dd>
                                                
                                                <dt class="col-sm-8">Expert</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->userName; ?></dd>

                                                <dt class="col-sm-8">Equipe</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->idEquipe; ?></dd>
                                            </dl>
                                        </div>

                                        <div class="col-md-6 mt-4">
                                            <dl class="row">
                                                <dt class="col-sm-8">Liste du matériels</dt>
                                                <?php foreach($materials as $material){ ?>
                                                <dd class="col-sm-8 mb-2"> > {{ $material->nomMat }}:
                                                    {{ $material->nbMat }} pcs</dd><?php ;} ?>

                                            </dl>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <h4 class="font-weight-bold">Description</h4>
                                            <p class="mb-5"><?php echo $order->description; ?>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="approve"
                                                class="btn btn-warning bg-warning btn-lg">Imprimer la Fiche</button>
                                        </div>
                                        <div class="feature text-right">

                                            <button type="submit" name="approve"
                                                class="btn btn-success bg-success btn-lg">Terminer</button>
                                            <button type="submit" name="refuse"
                                                class="btn btn-danger bg-danger btn-lg">Annuler</button>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
