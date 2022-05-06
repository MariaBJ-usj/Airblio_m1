<?php
use Illuminate\Support\Facades\DB;

$order = DB::table('commande')
    ->join('clients', 'clients.idC', '=', 'commande.idC')
    ->join('sites', 'sites.idSite', '=', 'commande.idSite')
    ->where('idCom', $id)
    ->first();

if (isset($_POST['accept'])) {
    DB::table('commande')
        ->where('idCom', $id)
        ->update(['etat' => 'ACCEPTEE']);
    header("Location: " . URL::to('/commandes'), true, 302);
    exit();
}
if (isset($_POST['refuse'])) {
    DB::table('commande')
        ->where('idCom', $id)
        ->update(['etat' => 'ANNULEE']);
    header("Location: " . URL::to('/commandes'), true, 302);
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
            zoom: 14,
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
            {{ __('Commande') }} {{ $id }}
        </h2>

    </x-slot>
    <form action="{{ route('commande_details_post', [$id]) }}" method="POST">
        @csrf <!-- {{ csrf_field() }} -->
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

                                        <div class="col-md-7">
                                            <div id="map" class="map-container" style="height: 490px; width: 100%">
                                            </div>
                                            <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiL8XJNvgWBPbLETYSRbgp7fPe7OZgEUA&callback=initMap"
                                                                                        defer>
                                            </script>
                                        </div>

                                        <div class="col-md-5">
                                            <dl class="row">
                                                <dt class="col-sm-8">Client</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->prenomC; ?> <?php echo $order->nomC; ?></dd>

                                                <dt class="col-sm-8">Adresses Mail du Client</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->mail; ?></dd>

                                                <dt class="col-sm-8">Telephone du Client</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->tel; ?></dd>

                                                <dt class="col-sm-8">Date de la Demande</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->dateCreation; ?></dd>

                                                <dt class="col-sm-8">Type</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->type; ?></dd>

                                                <dt class="col-sm-8">Date Souhaitée</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->dateSouhaitee; ?></dd>

                                                <dt class="col-sm-8">Etat</dt>
                                                <dd class="col-sm-8 mb-2"><?php echo $order->etat; ?></dd>

                                                <dt class="col-sm-8">Lieu</dt>
                                                <dd class="col-sm-8"><?php echo $order->denomination; ?></dd>
                                            </dl>
                                        </div>
                                        <div class="feature col">
                                            <h4 class="font-weight-bold mt-5">Description</h4>
                                            <p class="mb-5"><?php echo $order->description; ?>
                                        </div>
                                        <div class="feature text-right">
                                            <button type="submit" name="accept" class="btn btn-primary bg-primary btn-lg">Accepter et
                                                Envoyer au Responsable</button>
                                            <button type="submit" name="refuse"
                                                class="btn btn-secondary bg-secondary btn-lg">Annuler</button>
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
