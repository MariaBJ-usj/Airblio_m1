@extends('layouts/client_master')

@section('title')
    Accueil
@endsection

@section('page-content')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('/images/carousel_image_1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Plongez avec Qualité!</h5>
                    <p>Admirez la beauté des océans avec Airblio</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ url('/images/carousel_image_2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Matériel Incroyable</h5>
                    <p>Découvrez notre gamme de très bonne qualité</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ url('/images/carousel_image_3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Découvrez nos Equipes</h5>
                    <p>Faites la connaissance des groupes qui exécuterons vos interventions</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section id="about_section" class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Qui sommes-nous?</h1>
                <p class="lead text-muted">Airblio est une entreprise spécialisée dans l’équipement haut de gamme pour
                    les plongées en mer et l’accompagnement des entreprises.</p>
            </div>
        </div>
    </section>
    <section class="vh-50" style="background-color: #5fb7e7;" class="bg-gradient">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-10 col-xl-8">

                    <div class="card rounded-3">
                        <div class="card-body p-5">

                            <div class="d-flex justify-content-center mb-4">
                                <img src="{{ url('/images/mr_blio.jpeg') }}" class="rounded-circle shadow-1-strong"
                                    width="100" height="100" />
                            </div>
                            <figure class="text-center mb-0">
                                <blockquote class="blockquote mb-4">
                                    <p>
                                        <span class="font-italic">« Venir ensemble est un commencement; rester ensemble est un progrès; travailler ensemble est un succès »</span>
                                    </p>
                                </blockquote>
                                <figcaption class="blockquote-footer mb-0">
                                    Mr. Blio
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div>
        <div class="mgb-40 padb-30 auto-invert line-b-4 align-center">
            <h1 class="font-cond-b fg-text-d lts-md fs-300 fs-300-xs no-mg pt-5" contenteditable="false">Avis de notre
                Clientèle</h1>
        </div>
        <ul class="hash-list cols-3 cols-1-xs pad-30-all align-center text-sm">
            <li>
                <p class="fs-110 font-cond-l" contenteditable="false">"Equipe dynamique et compétente."</p>
                <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Jane Doe</h5>
                <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Business Woman - New
                    York</small>
            </li>
            <li>
                <p class="fs-110 font-cond-l" contenteditable="false">"Je suis satisfait de ma demande."</p>
                <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">John Doe</h5>
                <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Plongeur - Paris</small>
            </li>
            <li>
                <p class="fs-110 font-cond-l" contenteditable="false">"Matériel de très bonne qualité!"</p>
                <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Joe Doe</h5>
                <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Manager - Marseille</small>
            </li>
        </ul>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <section class="py-5 text-center container">
      <div class="row py-lg-5">
          <div>
            <h2>Nos Partenaires</h2>
            <section class="customer-logos slider">

                <div class="slide"><img
                        src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg">
                </div>
                <div class="slide"><img
                        src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
                <div class="slide"><img
                        src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
                <div class="slide"><img
                        src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
                <div class="slide"><img
                        src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
            </section>
            <script>
                $(document).ready(function() {
                    $('.customer-logos').slick({
                        slidesToShow: 6,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 1500,
                        arrows: false,
                        dots: false,
                        pauseOnHover: false,
                        responsive: [{
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 4
                            }
                        }, {
                            breakpoint: 520,
                            settings: {
                                slidesToShow: 3
                            }
                        }]
                    });
                });
            </script>
          </div>
      </div>
  </section>
@endsection
