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
                            <th>LIEU</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>00000000</td>
                            <td>XXXX</td>
                            <td>XXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>XXXXX</td>
                            <td>
                                <button type="button" class="btn btn-primary">Affecter</button>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXX</td>
                            <td>XXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>XXXXX</td>
                            <td>
                                <button type="button" class="btn btn-primary">Affecter</button>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXX</td>
                            <td>XXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>XXXXX</td>
                            <td>
                                <button type="button" class="btn btn-primary">Affecter</button>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXX</td>
                            <td>XXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>XXXXX</td>
                            <td>
                                <button type="button" class="btn btn-primary">Affecter</button>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXX</td>
                            <td>XXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>XXXXX</td>
                            <td>
                                <button type="button" class="btn btn-primary">Affecter</button>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXX</td>
                            <td>XXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>XXXXX</td>
                            <td>
                                <button type="button" class="btn btn-primary">Affecter</button>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXX</td>
                            <td>XXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>XXXXX</td>
                            <td>
                                <button type="button" class="btn btn-primary">Affecter</button>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXX</td>
                            <td>XXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>XXXXX</td>
                            <td>
                                <button type="button" class="btn btn-primary">Affecter</button>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXX</td>
                            <td>XXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>XXXXX</td>
                            <td>
                                <button type="button" class="btn btn-primary">Affecter</button>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXX</td>
                            <td>XXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>XXXXX</td>
                            <td>
                                <button type="button" class="btn btn-primary">Affecter</button>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXX</td>
                            <td>XXXX</td>
                            <td>XX/XX/XXXX</td>
                            <td>XXXXX</td>
                            <td>
                                <button type="button" class="btn btn-primary">Affecter</button>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
