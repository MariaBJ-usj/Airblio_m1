<?php
  use Illuminate\Support\Facades\DB;
 
  $equipments = DB::select('select * from materiel');
?>

@extends('layouts/admin_master')

@section('page-content')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <section id="admin_title" class="text-center">
        <div class="col-lg-6 col-md-8 mx-auto pt-5">
            <h2 class="fw-light">Matériels</h2>
        </div>
    </section>
    <div id="ajout_btn" class="btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary active">
            <input type="checkbox" checked autocomplete="off"> Ajouter un Matériel
        </label>
    </div>
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
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
