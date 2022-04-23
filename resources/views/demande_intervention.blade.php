@extends('layouts/client_master')

@section('page-content')
    <section id="about_section" class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Demande d'Intervention</h1>
        </div>
    </section>
    <form id="demande_interventionForm">
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Type d'intervention</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1"
                            checked>
                        <label class="form-check-label" for="gridRadios1">
                            Assistance pour Formation
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Maintenance
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Intervention Urgente
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <br />
        <div class="form-group">
            <label for="exampleFormControlInput1">Adresse Mail</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@example.com">
        </div><br />
        <div class="row form-group">
            <label for="date" class="col-sm-1 col-form-label">Date</label>
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
            <label for="exampleFormControlInput1">Telephone</label>
            <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="06 55 66 55 66">
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
