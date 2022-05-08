<?php
use Illuminate\Support\Facades\DB;

$order = DB::table('commande')
    ->join('clients', 'clients.idC', '=', 'commande.idC')
    ->join('intervention', 'intervention.idCommande', '=', 'commande.idCom')
    ->where('idCom', $id)
    ->first();

$idInter= $order->idIntervention;

$materials = DB::table('materiel_intervention')
    ->join('materiel', 'materiel.refMat', '=', 'materiel_intervention.refMat')
    ->where('idInter', $idInter)
    ->get();

if (isset($_POST['accept'])) {
    DB::table('commande')
        ->where('idCom', $id)
        ->update(['etat' => 'ACCEPTEE']);
    header('Location: ' . URL::to('/commandes'), true, 302);
    exit();
}
?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Devis pour Commande') }} {{ $id }}
        </h2>

    </x-slot>
    <form action="{{ route('commande_details_post', [$id]) }}" method="POST">
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
                            <div class="col-md-12">

                                <h2 class="fw-light text-center">Commande {{ $id }}</h2>
                                <h2 class="fw-light text-center">{{ $order->prenomC }} {{ $order->nomC }}</h2>
                                <br/>

                                <form>
                                    <div class="row">
                                        <?php foreach($materials as $material) { ?>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1" style="padding-top: 38px">{{$material->nomMat}}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="exampleFormControlSelect1">Prix</label>
                                                    <input type="text" class="form-control"
                                                        id="formGroupExampleInput">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Expédition</label>
                                                    <input type="text" class="form-control"
                                                        id="formGroupExampleInput">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Location</label>
                                                    <input type="text" class="form-control"
                                                        id="formGroupExampleInput">
                                                </div>
                                            </div>
                                        </div>
                                        <?php ;} ?>
                                    </div>

                                    <br/>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label for="formGroupExampleInput">Cout horaire</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <label for="formGroupExampleInput">Nombre d'heures estimé</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label for="exampleFormControlTextarea1">Cout de l'opération</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label for="exampleFormControlTextarea1">Divers</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label for="exampleFormControlTextarea1">Total</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <br />
                                            <a href="{{ route('devis') }}" onmouseover="this.style.textDecoration='none';">
                                                <button type="button" class="btn btn-block btn-danger bg-danger mb-2">Annuler</button>
                                            </a>
                                        </div>

                                        <div class="col-md-6">
                                            <br />
                                            <button type="submit" class="btn btn-block btn-primary bg-primary mb-2">Imprimer et
                                                envoyer</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
