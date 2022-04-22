@extends('layouts/admin_master')

@section('page-content')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <section id="admin_title" class="text-center">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="fw-light">Equipes</h2>
        </div>
    </section>
    <div id="ajout_btn" class="btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary active">
            <input type="checkbox" checked autocomplete="off"> Ajouter une Equipe
        </label>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <th>EQUIPE</th>
                            <th>ETAT</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>00000000</td>
                            <td>BLIO</td>
                            <td>XXXXXXXXX</td>
                            <td>1</td>
                            <td>ACTIF</td>
                            <td>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-success">Modifier</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <th>EQUIPE</th>
                            <th>ETAT</th>
                            <th>ACTIONS</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
