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

if (isset($_POST['intervention'])) {
    $fiche = '/fiche_intervention_commande_n_';
    $fiche .= $order->idCom;
    DB::table('intervention')->insert([
        'dateDébut' => $_POST['dateDebut'],
        'dateFin' => $_POST['dateFin'],
        'procédure' => $_POST['procedure'],
        'profondeur' => $_POST['profondeur'],
        'descriptif' => $_POST['descriptif'],
        'idCom' => $order->idCom,
        'idEq' => $_POST['equipe'],
        'idExpert' => $_POST['expert'],
        'nbHréel' => $_POST['nbHeures'],
        'lienFicheIntervention' => $fiche,
    ]);

    $intervention = DB::table('intervention')
    ->where('idCom', $id)
    ->first();

    $idInter=$intervention->idInter;

    $materialDivCounter = 0;
    while (true) {
        try {
            $materialDiv = 'materialDiv' . $materialDivCounter;
        if (!isset($_POST[$materialDiv])) {

            $matNom = 'matNom' . $materialDivCounter;
            $matNb = 'matNb' . $materialDivCounter;

            DB::table('materiel_intervention')->insert([
                'refMat' => $_POST[$matNom],
                'nbMat' => $_POST[$matNb],
                'idInter' => $idInter,
            ]);  
        }else{
            break;
            header("Location: " . URL::to('/intervention'), true, 302);
            exit();
        }
        $materialDivCounter++;
        } catch (ErrorException $e) {
            break;
            header("Location: " . URL::to('/intervention'), true, 302);
            exit();
        }   
    }
}

?>
<script>
    var matNum = 0;

    function myFunctionAdd() {
        var $div = $('div[id^="materielDiv"]:last');
        var num = parseInt($div.prop("id").match(/\d+/g), 10);
        var num2 = num + 1;
        var $klon = $('#materielDiv' + num).clone().attr('id', 'materielDiv' + num2).attr('name', 'materielDiv' + num2);
        $klon.find('select').attr('name','matNom'+ num2);
        $klon.find('input[type="number"]').attr('name','matNb'+ num2);
        $('#materielDiv' + num).after($klon);
    };

    function myFunctionDelete() {
        var $div = $('div[id^="materielDiv"]:last');
        var num = parseInt($div.prop("id").match(/\d+/g), 10);
        if (num > 0) {
            $('#materielDiv' + num).remove();
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
    <form action="{{ route('formulaire_intervention_post', [$id]) }}" method="POST">
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
                                                    <select class="form-control" id="exampleFormControlSelect1"
                                                        name="equipe">
                                                        <?php foreach ($equipes as $equipe) {
                                                            if ($equipe->idCom==0) {?>
                                                        <option value="{{ $equipe->idEq }}"><?php echo $equipe->idEq; ?></option>
                                                        <?php ;};} ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Expert Technique</label>
                                                    <select class="form-control" id="exampleFormControlSelect1"
                                                        name="expert">
                                                        <?php foreach ($resps as $resp) {?>
                                                        <option value="{{ $resp->idEmp }}"><?php echo $resp->userName; ?></option>
                                                        <?php }; ?>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="date">Date Début</label>
                                                    <input type="date" class="form-control" id="date"
                                                        min="<?php echo $order->dateSouhaitee; ?>" name="dateDebut">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="date">Date Fin</label>
                                                    <input type="date" class="form-control" id="date"
                                                        min="<?php echo $order->dateSouhaitee; ?>" name="dateFin">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="typeNumber">Profondeur</label>
                                                    <input type="number" id="typeNumber" class="form-control" min="3"
                                                        value="5" name="profondeur" max="500" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="typeNumber">Nombre d'heures</label>
                                                    <input type="number" id="typeNumber" class="form-control" min="1"
                                                        value="1" name="nbHeures" max="500" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="formGroupExampleInput">Procédure</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput"
                                                    name="procedure">
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 mt-4 mb-5">
                                                <label for="exampleFormControlTextarea1">Descriptif de
                                                    l'intervention</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                    name="descriptif"><?php echo $order->description; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row" id="materielDiv0" name="materielDiv0">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="">Nom Matériel</label>
                                                    <select class="form-control" id="" name="matNom0">
                                                        <?php 
                                                            foreach ($materiels as $materiel) {?>
                                                        <option value="{{ $materiel->refMat }}"> <?php echo $materiel->nomMat; ?></option>
                                                        <?php ;} ?>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="typeNumber">Nombre</label>
                                                    <input type="number" id="typeNumber" class="form-control" min="1"
                                                        value="1" name="matNb0" max="500" />
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
                                                <button type="submit" class="btn btn-block btn-success bg-success mb-2"
                                                    name="intervention">Démarrer
                                                    l'Intervention</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <div id="map" class="map-container" style="height: 555px; width: 100%">
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
