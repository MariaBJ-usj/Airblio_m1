<?php
use Illuminate\Support\Facades\DB;

$ordersT = DB::table('intervention')
    ->join('commande', 'commande.idCom', '=', 'intervention.idCommande')
    ->join('employé', 'employé.idEmp', '=', 'intervention.idExpert')
    ->join('sites', 'sites.idSite', '=', 'commande.idSite')
    ->get();

$orders = $ordersT->sortBy('idIntervention', SORT_REGULAR );

$ids = DB::table('intervention')->pluck('idIntervention');
$sorted = $ids->sortBy('idIntervention', SORT_REGULAR );
$labels = $sorted->toArray();

?>
<script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru

        const infoWindow = new google.maps.InfoWindow({
            content: "",
            disableAutoPan: true,
        });

        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 2,
            center: {
                lat: 0,
                lng: 0
            },
        });

        const locations = [
            <?php foreach($orders as $order) { ?> {
                lat: <?php echo $order->latitude; ?>,
                lng: <?php echo $order->longitude; ?>
            },
            <?php }; ?>
        ];

        var labels = <?php echo json_encode($labels); ?>;


        // Add some markers to the map.
        var i = 0;
        const markers = locations.map((position, i) => {
            const label = "" + labels[i];
            const marker = new google.maps.Marker({
                position,
                label,
            });

            i++;
            // markers can only be keyboard focusable when they have click listeners
            // open info window when marker is clicked
            marker.addListener("click", () => {
                infoWindow.setContent(label);
                infoWindow.open(map, marker);
            });
            return marker;
        });

        // Add a marker clusterer to manage the markers.
        const markerCluster = new markerClusterer.MarkerClusterer({
            map,
            markers
        });

    }

    window.initMap = initMap;
</script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Interventions') }}
        </h2>

    </x-slot>

    <div class="text-center mb-3 col-md-12">
        <div id="map" class="map-container mt-5" style="height: 550px; width: 70%">
            <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiL8XJNvgWBPbLETYSRbgp7fPe7OZgEUA&callback=initMap"
                        defer></script>
        </div>
    </div>

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
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>NUMERO INTERVENTION</th>
                                        <th>DATE DEBUT</th>
                                        <th>DATE FIN</th>
                                        <th>TYPE</th>
                                        <th>EQUIPE</th>
                                        <th>EXPERT</th>
                                        <th>ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($orders as $order) { $id=$order->idCom;?>
                                    <tr>
                                        <td><?php echo $order->idIntervention; ?></td>
                                        <td><?php echo $order->dateDébut; ?></td>
                                        <td><?php echo $order->dateFin; ?></td>
                                        <td><?php echo $order->type; ?></td>
                                        <td><?php echo $order->idEquipe; ?></td>
                                        <td><?php echo $order->userName; ?></td>
                                        <td style="text-align: center">
                                            <a href="{{ route('fiche_intervention', [$id]) }}">
                                                <button type="button" class="btn btn-primary bg-primary">Détails</button>
                                            </a>
                                            <a href="{{ route('formulaire_intervention', [$id]) }}">
                                                <button type="button"
                                                    class="btn btn-success bg-success">Terminer</button>
                                            </a>
                                            <a href="{{ route('formulaire_intervention', [$id]) }}">
                                                <button type="button" class="btn btn-danger bg-danger">Annuler</button>
                                            </a>
                                            <a href="{{ route('formulaire_intervention', [$id]) }}">
                                                <button type="button" class="btn btn-warning bg-warning"
                                                    style="margin-top: 5px">Imprimer la fiche d'intervention</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
