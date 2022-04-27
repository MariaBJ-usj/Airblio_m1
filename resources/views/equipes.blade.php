<?php
  use Illuminate\Support\Facades\DB;
 
  $employees = DB::select('select * from employé');
  $teams = DB::select('select * from equipeintervention');
?>


@extends('layouts/admin_master')

@section('page-content')
    <script>
        $(document).ready(function() {
            $('#table-employees').DataTable();
        });
        function updateTeamDisplay() {
            var selector = document.getElementById("teams-selector");
            var table = document.getElementById("table-employees");
            var teamSelectionned = selector.value;
            console.log("Team sélectionné : ", teamSelectionned);

            for (var i = 1, row; row = table.rows[i]; i++) {
                if (row.getAttribute("value") != teamSelectionned && teamSelectionned != "*") {
                    row.style.display = "none";
                }
                else {
                    row.style.display = "table-row";
                }
            }
        };
    </script>

    <section id="admin_title" class="text-center">
        <div class="col-lg-6 col-md-8 mx-auto pt-5">
            <h2 class="fw-light">Equipes</h2>
        </div>
    </section>

    <div class="d-flex justify-content-center">
        <div class="mx-3">
            <label>Afficher : </label>
            <select id="teams-selector" onchange="updateTeamDisplay()">
                <option value="*">Toutes les équipes</option>
                <?php foreach($teams as $team) { ?>
                <option value="<?php echo $team->idEq ?>"><?php echo "Equipe " . $team->idEq ?></option>
                <?php } ?>
            </select>
        </div>
        <span class="d-flex justify-content-center flex-column mx-3">
            <button type="button" class="btn btn-warning btn-lg mb-1">Ajouter une équipe</button><br>
            <button type="button" class="btn btn-warning btn-lg">Modifier une équipe</button>
        </span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table id="table-employees" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID Employé</th>
                            <th>Nom</th>
                            <th>Equipe</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($employees as $employee) { ?>
                        <tr value="<?php echo $employee->idEq ?>">
                            <td><?php echo $employee->idEmp ?></td>
                            <td><?php echo $employee->userName ?></td>
                            <td><?php echo $employee->idEq ?></td>
                            <td><?php echo $employee->type ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>   
                </table>
            </div>
        </div>
    </div>
@endsection
