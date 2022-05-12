<?php
  use Illuminate\Support\Facades\DB;
 
  $equipments = DB::select('select * from materiel');
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Demandes à Etudier') }}
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
                                        <th>REFERENCE</th>
                                        <th>NOM</th>
                                        <th>TYPE</th>
                                        <th>DATE D'ACQUISITION</th>
                                        <th>FIN DE VALIDITE</th>
                                        <th>NOMBRE DE VERIFICATIONS ANNUELLES</th>
                                        <th>ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($equipments as $equipment) { ?>
                                    <tr>
                                        <td><?php echo $equipment->refMat ?></td>
                                        <td><?php echo $equipment->nomMat ?></td>
                                        <td><?php echo $equipment->typeMat ?></td>
                                        <td><?php echo $equipment->dateAcquis ?></td>
                                        <td><?php echo $equipment->finValidite ?></td>
                                        <td><?php echo $equipment->nbVerifAnnuel ?></td>
                                        <td style="text-align: center">
                                            <a href="">
                                                <button type="button" class="btn btn-primary bg-primary">Détails</button>
                                            </a>
                                            <a href="">
                                                <button type="button"
                                                    class="btn btn-success bg-success mt-3">Affecter à une intervention</button>
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