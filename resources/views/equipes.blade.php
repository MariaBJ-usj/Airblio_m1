@extends('layouts/admin_master')

@section('page-content')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <section id="about_section" class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="fw-light">Equipes</h2>
        </div>
    </section>
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
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>00000000</td>
                            <td>XXXXXXXXX</td>
                            <td>XXXXXXXXX</td>
                            <td>2</td>
                            <td>PRET</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
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
