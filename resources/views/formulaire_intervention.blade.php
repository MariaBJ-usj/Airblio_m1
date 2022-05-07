<?php
use Illuminate\Support\Facades\DB;

$order = DB::table('commande')
    ->join('clients', 'clients.idC', '=', 'commande.idC')
    ->join('sites', 'sites.idSite', '=', 'commande.idSite')
    ->where('idCom', $id)
    ->first();

$equipes = DB::select('select * from equipes');

$materiels = DB::select('select * from materiel');

$resps = DB::select('select * from employé where type="respTechnique"');

if (isset($_POST['approve'])) {
    DB::table('commande')
        ->where('idCom', $id)
        ->update(['etat' => 'APPROUVEE']);
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
    var matNum=0;
    function myFunctionAdd() {
        var $div = $('div[id^="materielDiv"]:last');
        var num = parseInt( $div.prop("id").match(/\d+/g), 10 );
        var num2 = num+1;
        var $klon =  $('#materielDiv'+num).clone().prop('id', 'materielDiv'+num2 );
        $('#materielDiv'+num).after($klon);
        matNum++;
        alert(matNum);
    };

    function myFunctionDelete() {
        var $div = $('div[id^="materielDiv"]:last');
        var num = parseInt( $div.prop("id").match(/\d+/g), 10 );
        if (num>0) {
           $('#materielDiv'+num).remove(); 
           matNum--;
           alert(matNum);
        }
    };

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
            {{ __('Demande') }} {{ $id }}
        </h2>

    </x-slot>
    <form action="" method="">
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
                    <div class="container pt-4">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <form id="formId">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Equipe</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <?php foreach ($equipes as $equipe) {
                                                            if ($equipe->idCom==0) {?>
                                                        <option><?php echo $equipe->idEq; ?></option>
                                                        <?php ;};} ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Expert Technique</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <?php foreach ($resps as $resp) {?>
                                                        <option><?php echo $resp->userName; ?></option>
                                                        <?php }; ?>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="date">Date Début</label>
                                                    <input type="date" class="form-control" id="date" min="<?php echo $order->dateSouhaitee; ?>" name="date">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="date">Date Fin</label>
                                                    <input type="date" class="form-control" id="date" min="<?php echo $order->dateSouhaitee; ?>" name="date">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="typeNumber">Profondeur</label>
                                                    <input type="number" id="typeNumber" class="form-control" min="3" value="5"
                                                        max="500" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="formGroupExampleInput">Procédure</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput">
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 mt-4 mb-5">
                                                <label for="exampleFormControlTextarea1">Descriptif de
                                                    l'intervention</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $order->description; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row" id="materielDiv0">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="">Nom Matériel</label>
                                                    <select class="form-control" id="">
                                                        <?php 
                                                            foreach ($materiels as $materiel) {
                                                            if ($materiel->nbCom==0) {?>
                                                        <option><?php echo $materiel->nomMat; ?></option>
                                                        <?php ;};} ?>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="typeNumber">Nombre</label>
                                                    <input type="number" id="typeNumber" class="form-control" min="1" value="1"
                                                        max="500" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button onclick="myFunctionAdd()" type="button"
                                                    class="btn btn-block btn-primary bg-primary">Ajouter</button>
                                            </div>

                                            <div class="col-md-6">

                                                <button onclick="myFunctionDelete()" type="button"
                                                    class="btn btn-block btn-danger bg-danger">Supprimer</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br />
                                                <button type="submit"
                                                    class="btn btn-block btn-success bg-success mb-2">Démarrer
                                                    l'Intervention</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <div id="map" class="map-container" style="height: 470px; width: 100%">
                                    </div>
                                    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiL8XJNvgWBPbLETYSRbgp7fPe7OZgEUA&callback=initMap"
                                                                        defer>
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
