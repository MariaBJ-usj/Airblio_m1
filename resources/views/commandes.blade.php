<?php
  use Illuminate\Support\Facades\DB;
 
  $orders = DB::select('select * from commande');
?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Commandes') }}
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
                                        <th>NUMERO DE COMMANDE</th>
                                        <th>DATE</th>
                                        <th>TYPE</th>
                                        <th>ETAT</th>
                                        <th>DEVIS</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php foreach($orders as $order) { ?>
                                    <tr>
                                        <td><?php echo $order->idCom ?></td>
                                        <td><?php echo $order->dateCreation ?></td>
                                        <td><?php echo $order->type ?></td>
                                        <td><?php echo $order->etat ?></td>
                                        <td><?php echo $order->devisAccept ?></td>
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
