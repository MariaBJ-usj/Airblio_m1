@extends('layouts/admin_master')

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
                        <tr>
                            <th>NUMERO DE DEMANDE</th>
                            <th>DATE DE RECEPTION</th>
                            <th>TYPE</th>
                            <th>DATE SOUHAITEE</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>00000000001</td>
                            <td>XX/XX/XXXX</td>
                            <td>NOUVELLE INTERVENTION</td>
                            <td>XX/XX/XXXX</td>
                            <td>
                                <button type="button" class="btn btn-success">Visualiser la Demande</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000002</td>
                            <td>XX/XX/XXXX</td>
                            <td>ASSISTANCE</td>
                            <td>XX/XX/XXXX</td>
                            <td>
                                <button type="button" class="btn btn-success">Visualiser la Demande</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000003</td>
                            <td>XX/XX/XXXX</td>
                            <td>NOUVELLE INTERVENTION</td>
                            <td>XX/XX/XXXX</td>
                            <td>
                                <button type="button" class="btn btn-success">Visualiser la Demande</button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>NUMERO DE DEMANDE</th>
                            <th>DATE DE RECEPTION</th>
                            <th>TYPE</th>
                            <th>DATE SOUHAITEE</th>
                            <th>ACTIONS</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
