<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/google_maps.js') }}"></script>
    <link rel="stylesheet" text="css" href="{{ url('/css/app.css') }}">
    <title>Airblio @yield("title")</title>
</head>

<body class="bg-gray 700 text-white">
    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">

                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true"
                        data-mdb-toggle="collapse" href="#collapseExample1" aria-expanded="true"
                        aria-controls="collapseExample1">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Commandes</span>
                    </a>

                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true"
                        data-mdb-toggle="collapse" href="#collapseExample1" aria-expanded="true"
                        aria-controls="collapseExample1">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Demandes à Etudier</span>
                    </a>

                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true"
                        data-mdb-toggle="collapse" href="#collapseExample2" aria-expanded="true"
                        aria-controls="collapseExample2">
                        <i class="fas fa-chart-area fa-fw me-3"></i><span>Interventions</span>
                    </a>

                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true"
                        data-mdb-toggle="collapse" href="#collapseExample2" aria-expanded="true"
                        aria-controls="collapseExample2">
                        <i class="fas fa-chart-area fa-fw me-3"></i><span>Devis</span>
                    </a>

                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true"
                        data-mdb-toggle="collapse" href="#collapseExample2" aria-expanded="true"
                        aria-controls="collapseExample2">
                        <i class="fas fa-chart-area fa-fw me-3"></i><span>Matériels</span>
                    </a>

                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true"
                        data-mdb-toggle="collapse" href="#collapseExample2" aria-expanded="true"
                        aria-controls="collapseExample2">
                        <i class="fas fa-chart-area fa-fw me-3"></i><span>Clients</span>
                    </a>

                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true"
                        data-mdb-toggle="collapse" href="#collapseExample2" aria-expanded="true"
                        aria-controls="collapseExample2">
                        <i class="fas fa-chart-area fa-fw me-3"></i><span>Equipes</span>
                    </a>
                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true"
                        data-mdb-toggle="collapse" href="#collapseExample2" aria-expanded="true"
                        aria-controls="collapseExample2">
                        <i class="fas fa-chart-area fa-fw me-3"></i><span>Employés</span>
                    </a>
                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <img src="{{ url('/logos/png/Color logo - no background.png') }}" height="25" alt="Logo"
                        loading="lazy" id="admin_navbar_logo" />
                </a>
            </div>
            <div>
                <span class="navbar-text">Admin</span>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 30px; padding-left: 240px">
        <div class="container pt-4">
          @yield("page-content")</div>
    </main>
    <footer>Footer</footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>
