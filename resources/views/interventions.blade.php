<?php
use Illuminate\Support\Facades\DB;

$orders = DB::table('intervention')
    ->join('commande', 'commande.idCom', '=', 'intervention.idCom')
    ->join('employé', 'employé.idEmp', '=', 'intervention.idExpert')
    ->get();
?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Interventions') }}
        </h2>

    </x-slot>

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
                                        <td><?php echo $order->idEq; ?></td>
                                        <td><?php echo $order->userName; ?></td>
                                        <td>
                                            <a href="{{ route('formulaire_intervention', [$id]) }}">
                                                <button type="button" class="btn btn-primary bg-primary">Détails</button>
                                            </a>
                                            <a href="{{ route('formulaire_intervention', [$id]) }}">
                                                <button type="button" class="btn btn-success bg-success">Terminer</button>
                                            </a>
                                            <a href="{{ route('formulaire_intervention', [$id]) }}">
                                                <button type="button" class="btn btn-danger bg-danger">Annuler</button>
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
