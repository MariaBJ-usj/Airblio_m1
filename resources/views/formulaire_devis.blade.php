@extends('layouts/admin_master')

@section('page-content')
    <div class="container pt-4">


        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2 class="fw-light text-center">Commande XXXXXXXXX</h2>
                    <h2 class="fw-light text-center">Nom et prénom du client XXXXXXXXX</h2>

                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">

                                            <label for="exampleFormControlSelect1">Matérial XXXX</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">

                                            <label for="exampleFormControlSelect1">Prix</label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Expédition</label>

                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Location</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">

                                            <label for="exampleFormControlSelect1">Matérial XXXX</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">

                                            <label for="exampleFormControlSelect1">Prix</label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Expédition</label>

                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Location</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">

                                            <label for="exampleFormControlSelect1">Matérial XXXX</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">

                                            <label for="exampleFormControlSelect1">Prix</label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Expédition</label>

                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Location</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="formGroupExampleInput">Cout horaire</label>
                                <input type="text" class="form-control" id="formGroupExampleInput">
                            </div>

                            <div class="col-md-6">
                                <label for="formGroupExampleInput">Nombre d'heures estimé</label>
                                <input type="text" class="form-control" id="formGroupExampleInput">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleFormControlTextarea1">Cout de l'opération</label>
                                <input type="text" class="form-control" id="formGroupExampleInput">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleFormControlTextarea1">Divers</label>
                                <input type="text" class="form-control" id="formGroupExampleInput">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleFormControlTextarea1">Total</label>
                                <input type="text" class="form-control" id="formGroupExampleInput">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <br />
                                <button type="submit" class="btn btn-block btn-danger mb-2">Annuler</button>
                            </div>

                            <div class="col-md-6">
                                <br />
                                <button type="submit" class="btn btn-block btn-primary mb-2">Imprimer et envoyer</button>
                            </div>
                        </div>





                </div>




                </form>


            </div>




        </div>



    </div>
@endsection
