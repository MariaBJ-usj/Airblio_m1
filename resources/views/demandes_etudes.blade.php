@extends('layouts/admin_master')
<?php
  use Illuminate\Support\Facades\DB;
 
  $orders = DB::select('select * from commande c WHERE c.etat="ENCOURS" ');
?>

@section('page-content')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <section id="admin_title" class="text-center">
        <div class="col-lg-6 col-md-8 mx-auto pt-5">
            <h2 class="fw-light">Demandes à Etudier</h2>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <thead>
                            <tr>
                                <th>NUMERO DE COMMANDE</th>
                                <th>DATE</th>
                                <th>TYPE</th>
                                <th>DEVIS</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <?php foreach($orders as $order) { ?>
                            <tr>
                                <td><?php echo $order->idCom ?></td>
                                <td><?php echo $order->dateCreation ?></td>
                                <td><?php echo $order->type ?></td>
                                <td><?php echo $order->devisAccept ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
