@extends('layouts/admin_master')

@section('page-content')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <section id="admin_title" class="text-center">
        <div class="col-lg-6 col-md-8 mx-auto pt-5">
            <h2 class="fw-light">Devis</h2>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>COMMANDE</th>
                            <th>DATE</th>
                            <th>ETAT</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>XXXXXXXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>ETABLIE</td>
                            <td>
                                <button type="button" class="btn btn-success">Visualiser Devis</button>
                            </td>
                        </tr>
                        <tr>
                            <td>XXXXXXXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>NON ETABLIE</td>
                            <td>
                                <button type="button" class="btn btn-primary">Etablir</button>
                            </td>
                        </tr>
                        <tr>
                            <td>XXXXXXXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>NON ETABLIE</td>
                            <td>
                                <button type="button" class="btn btn-primary">Etablir</button>
                            </td>
                        </tr>
                        <tr>
                            <td>XXXXXXXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>NON ETABLIE</td>
                            <td>
                                <button type="button" class="btn btn-primary">Etablir</button>
                            </td>
                        </tr>
                        <tr>
                            <td>XXXXXXXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>NON ETABLIE</td>
                            <td>
                                <button type="button" class="btn btn-primary">Etablir</button>
                            </td>
                        </tr>
                        <tr>
                            <td>XXXXXXXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>NON ETABLIE</td>
                            <td>
                                <button type="button" class="btn btn-primary">Etablir</button>
                            </td>
                        </tr>
                        <tr>
                            <td>XXXXXXXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>NON ETABLIE</td>
                            <td>
                                <button type="button" class="btn btn-primary">Etablir</button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>COMMANDE</th>
                            <th>DATE</th>
                            <th>ETAT</th>
                            <th>ACTIONS</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
