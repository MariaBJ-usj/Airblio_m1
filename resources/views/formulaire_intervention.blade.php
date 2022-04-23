@extends('layouts/admin_master')

@section('page-content')
    <div class="container pt-4">
        <section id="about_section" class="py-5 text-center container">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h2 class="fw-light">Commande XXXXXXXXX</h2>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
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
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Expert Technique</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>XXXXXXXXX</option>
                                        <option>XXXXXXXXX</option>
                                        <option>XXXXXXXXX</option>
                                        <option>XXXXXXXXX</option>
                                        <option>XXXXXXXXX</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Date Début</label>
                                    <input type="date" class="form-control" id="date" name="date">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Date Fin</label>
                                    <input type="date" class="form-control" id="date" name="date">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="typeNumber">Profondeur</label>
                                    <input type="number" id="typeNumber" class="form-control" min="3" max="500" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="formGroupExampleInput">Procédure</label>
                                <input type="text" class="form-control" id="formGroupExampleInput">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <label for="exampleFormControlTextarea1">Descriptif de l'intervention</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <br />
                                <button type="submit" class="btn btn-block btn-primary mb-2">Démarrer
                                    l'Intervention</button>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Nom Matériel</label>
                                    <select class="form-control" id="">
                                        <option>XXXXXXXXX</option>
                                        <option>XXXXXXXXX</option>
                                        <option>XXXXXXXXX</option>
                                        <option>XXXXXXXXX</option>
                                        <option>XXXXXXXXX</option>
                                    </select>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <select class="form-control" id="">
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select>
                                </div>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">

                                <button type="submit" class="btn btn-block btn-primary">Ajouter</button>
                            </div>

                            <div class="col-md-6">

                                <button type="submit" class="btn btn-block btn-danger">Supprimer</button>
                            </div>
                        </div>


                </div>




                </form>

                <div class="col-md-6">
                    <iframe id="map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7949.648656006072!2d5.361920901339417!3d43.30493403062737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9c1b300000001%3A0xc9bd888061c8e8bd!2sMarseille%20Fos%20Port!5e0!3m2!1sen!2sfr!4v1650397502504!5m2!1sen!2sfr"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                </div>
            </div>




        </div>



    </div>
@endsection
