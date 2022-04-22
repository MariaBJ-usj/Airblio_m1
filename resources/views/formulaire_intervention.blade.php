@extends('layouts/admin_master')

@section('page-content')
    <section id="about_section" class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="fw-light">Commande XXXXXXXXX</h2>
        </div>
    </section>
    <form id="demande_interventionForm">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Equipe</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Equipe 1</option>
                <option>Equipe 2</option>
                <option>Equipe 3</option>
                <option>Equipe 4</option>
                <option>Equipe 5</option>
            </select>
        </div>
        <br />
        <div class="form-group">
            <label for="exampleFormControlSelect1">Expert Technique</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>XXXXXXXXX</option>
                <option>XXXXXXXXX</option>
                <option>XXXXXXXXX</option>
                <option>XXXXXXXXX</option>
                <option>XXXXXXXXX</option>
            </select>
        </div><br />
        <div class="form-group">
            <label for="date">Date Début</label>
            <div class="col-sm-4">
                <div class="input-group date" id="datepicker">
                    <input type="text" class="form-control">
                    <span class="input-group-append">
                        <span class="input-group-text bg-white d-block">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </span>
                </div>
            </div>
            <script type="text/javascript">
                $(function() {
                    $('#datepicker').datepicker();
                });
            </script>
        </div><br />
        <div class="form-group">
            <label for="date">Date Fin</label>
            <div class="col-sm-4">
                <div class="input-group date" id="datepicker">
                    <input type="text" class="form-control">
                    <span class="input-group-append">
                        <span class="input-group-text bg-white d-block">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </span>
                </div>
            </div>
            <script type="text/javascript">
                $(function() {
                    $('#datepicker').datepicker();
                });
            </script>
        </div><br />
        <div class="form-group">
            <label for="typeNumber">Profondeur</label>
            <input type="number" id="typeNumber" class="form-control" min="3" max="500" />
        </div><br />
        <div class="form-group">
            <label for="formGroupExampleInput">Procédure</label>
            <input type="text" class="form-control" id="formGroupExampleInput">
        </div><br />
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descriptif de l'intervention</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form>

    <iframe id="map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7949.648656006072!2d5.361920901339417!3d43.30493403062737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9c1b300000001%3A0xc9bd888061c8e8bd!2sMarseille%20Fos%20Port!5e0!3m2!1sen!2sfr!4v1650397502504!5m2!1sen!2sfr"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    <section id="about_section" class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </div>
    </section>
@endsection

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
