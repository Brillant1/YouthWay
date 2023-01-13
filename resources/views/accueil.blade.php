@extends('partials.template')
@section('content')



    <section class="d-flex justify-content-center py-5" style="background-color: #FF000007;padding:0 important;">
        <div class="d-flex justify-content-between mt-5 pt-3 first-banner">
            <div class="text-first-banner">
                <h1 class=" rosette-text-orange fw-bold text-uppercase">Youthway <span class="fs-1">,</span></h1>
                <h3 class="my-3 titre-youth">Organisation internationale à but non lucratif</h3>
                <p class="text-accueil">
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                    Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae
                </p>
            </div>
            <div class=" main-carousel-content" >
                <div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
                    <div class="carousel-inner carousel-first-section ">
                        <div class="carousel-item active   d-flex justify-content-lg-center align-items-center">
                            <img src="{{ asset('images/carousel6.jpg') }}" class=" img-fluid" alt="photo">
                        </div>
                        <div class="carousel-item   d-flex justify-content-lg-center align-items-center">
                            <img src="{{ asset('images/carousel3.jpg') }}" class=" img-fluid" alt="photo">
                        </div>
                        <div class="carousel-item  d-flex justify-content-lg-center align-items-center">
                            <img src="{{ asset('images/carousel2.jpg') }}" class=" img-fluid" alt="photo">
                        </div>
                        <div class="carousel-item  d-flex justify-content-lg-center align-items-center">
                            <img src="{{ asset('images/carousel1.jpg') }}" class=" img-fluid" alt="photo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=" pb-5 mt-5 m-0 d-flex justify-content-center presentation-container-parent" style="padding-bottom:30px;">
        <div class=" container presentation-container mt-5 ">
            <div class="row presentation-scolaire justify-content-between">
                <div class="context-presentation col-md-6 col-sm-12 col-lg-6 col-xl-6 d-flex align-items-center">
                    <div class="context-presentation-content">
                        <div class="presentation-title">
                            <h1
                                class=" fs-2 h1-rosette-presentation justify-content-flex-start align-items-center d-flex fw-bold">
                                Présentation
                                <span class=" border-4  mx-3"></span>
                            </h1>
                        </div>
                        <p class="my-4">Un cadre de rêve pour les études !</p>
                        <p class="presentation-info-text">Enfant, je me souviens qu’en discutant avec mon père, je lui
                            exprimais mon désir d’avoir de
                            nombreux enfants, d’être entourée de nombreux enfants. J’avais alors à peine sept ans...</p>
                        <a href="{{ route('historique') }}" class="lien-historique mt-2">Historique <span><svg
                                    width="14" height="10" viewBox="0 0 14 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 4.99998C0 4.86737 0.0526784 4.74019 0.146447 4.64643C0.240215 4.55266 0.367392 4.49998 0.5 4.49998L12.293 4.49998L9.146 1.35398C9.05211 1.26009 8.99937 1.13275 8.99937 0.999979C8.99937 0.867204 9.05211 0.739865 9.146 0.645979C9.23989 0.552093 9.36722 0.499348 9.5 0.499348C9.63278 0.499348 9.76011 0.552093 9.854 0.645979L13.854 4.64598C13.9006 4.69242 13.9375 4.7476 13.9627 4.80835C13.9879 4.86909 14.0009 4.93421 14.0009 4.99998C14.0009 5.06575 13.9879 5.13087 13.9627 5.19161C13.9375 5.25236 13.9006 5.30753 13.854 5.35398L9.854 9.35398C9.76011 9.44787 9.63278 9.50061 9.5 9.50061C9.36722 9.50061 9.23989 9.44787 9.146 9.35398C9.05211 9.26009 8.99937 9.13275 8.99937 8.99998C8.99937 8.8672 9.05211 8.73987 9.146 8.64598L12.293 5.49998L0.5 5.49998C0.367392 5.49998 0.240215 5.4473 0.146447 5.35353C0.0526784 5.25976 0 5.13259 0 4.99998Z"
                                        fill="white" />
                                </svg>
                            </span></a>
                    </div>
                </div>
                <div class="context-video col-md-6 col-lg-6 col-xl-6 d-flex justify-content-end align-items-center">
                    <div class="video-back">
                        <div class="video-iframe basic-2">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=WLHUJvoVb5I"
                                data-effect="fadeIn" style="width: 100%;height:100%;border-radius:20px;"> <img
                                    class="img-fluid" style="width: 100%;height:100%;border-radius:20px;object-fit:cover;"
                                    src="{{ asset('images/patou.jpg') }}" alt="Le promoteur">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container-fluid py-5" style="background-color: #00000008">
        <section class="atouts container pt-5 ">
            <div class="atouts-title mb-5">
                <h1 class=" fs-3 h1-rosette-presentation justify-content-flex-start align-items-center d-flex fw-bold">
                    Domaines d'intervention
                    <span class=" border-4  mx-3"></span>
                </h1>

                <h6>Nous intervenons dans les domaines d'ordre social tel que: la santé, l'éducation, la sexualité, la jeunesse et plein d'autres les activités scolaires et para-scolaires</h6>
            </div>
            <div class="container row m-auto atout-item-container">
                <div class="col-md-4 atout-item">
                    <div class="card">
                        <img src="{{ asset('images/card/3.png') }}" class="card-img-top" alt="">
                        <div class="card-body ">
                            <h3 class="card-title h3-rosette-presentation text-center rosette-text-green">Santé sexuelle</h3>
                            <p class="card-text text-center">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper
                                sit amet ligula. Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 atout-item">
                    <div class="card">
                        <img src="{{ asset(asset('images/card/2.png')) }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h3 class="card-title h3-rosette-presentation text-center rosette-text-green ">Jeunesse</h3>
                            <p class="card-text text-center">
                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec
                                velit neque, auctor sit amet aliquam vel, ullamcorper
                                sit amet ligula. Lorem ipsum dolor sit amet, consectetur..
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 atout-item">
                    <div class="card">
                        <img src="{{ asset('images/card/1.png') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h3 class="card-title h3-rosette-presentation text-center rosette-text-green  ">Education</h3>
                            <p class="card-text text-center">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper
                                sit amet ligula. Lorem ipsum dolor sit amet, consectetur. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center my-5"><a href="{{ route('domaine') }}" class="lien-historique mt-2">Voir plus <span><svg
                            width="14" height="10" viewBox="0 0 14 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0 4.99998C0 4.86737 0.0526784 4.74019 0.146447 4.64643C0.240215 4.55266 0.367392 4.49998 0.5 4.49998L12.293 4.49998L9.146 1.35398C9.05211 1.26009 8.99937 1.13275 8.99937 0.999979C8.99937 0.867204 9.05211 0.739865 9.146 0.645979C9.23989 0.552093 9.36722 0.499348 9.5 0.499348C9.63278 0.499348 9.76011 0.552093 9.854 0.645979L13.854 4.64598C13.9006 4.69242 13.9375 4.7476 13.9627 4.80835C13.9879 4.86909 14.0009 4.93421 14.0009 4.99998C14.0009 5.06575 13.9879 5.13087 13.9627 5.19161C13.9375 5.25236 13.9006 5.30753 13.854 5.35398L9.854 9.35398C9.76011 9.44787 9.63278 9.50061 9.5 9.50061C9.36722 9.50061 9.23989 9.44787 9.146 9.35398C9.05211 9.26009 8.99937 9.13275 8.99937 8.99998C8.99937 8.8672 9.05211 8.73987 9.146 8.64598L12.293 5.49998L0.5 5.49998C0.367392 5.49998 0.240215 5.4473 0.146447 5.35353C0.0526784 5.25976 0 5.13259 0 4.99998Z"
                                fill="white" />
                        </svg>
                        </i></span></a></div>
        </section>
    </div>
    {{-- Actualite section --}}
    <section class="actualites my-5 container">

            <div class="presentation-title">
                <h1
                    class=" fs-2 h1-rosette-presentation justify-content-flex-start align-items-center d-flex fw-bold">
                    Nos actualités
                    <span class=" border-4  mx-3"></span>
                </h1>
                <h6>Nous intervenons dans les domaines d'ordre social tel que: la santé, l'éducation, la sexualité, la jeunesse et plein d'autres les activités scolaires et para-scolaires</h6>
            </div>
            <div class="container row m-auto actualite-item-container mt-5">

                @foreach ($actualites as $actualite)
                    <div class="col-md-4 actualite-item">
                        <div class="card">
                            <span class="actualite-date">
                                {{ date('d', strtotime($actualite->created_at)) }}<br>{{ date('M', strtotime($actualite->created_at)) }}.<br>{{ date('Y', strtotime($actualite->created_at)) }}</span>
                            <img src="{{ asset('storage/' . $actualite->photo) }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="actualite-item-link card-title h3-rosette-presentation text-start ">
                                    {{ substr($actualite->titre, 0, 50) }}....

                                </h5>
                                <a href="{{ route('actualite-detail', $actualite->id) }}"
                                    class="lien-article mt-5 float-end rosette-text-green fw-bold">Lire
                                    l'article <span><svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 4.99998C0 4.86737 0.0526784 4.74019 0.146447 4.64643C0.240215 4.55266 0.367392 4.49998 0.5 4.49998L12.293 4.49998L9.146 1.35398C9.05211 1.26009 8.99937 1.13275 8.99937 0.999979C8.99937 0.867204 9.05211 0.739865 9.146 0.645979C9.23989 0.552093 9.36722 0.499348 9.5 0.499348C9.63278 0.499348 9.76011 0.552093 9.854 0.645979L13.854 4.64598C13.9006 4.69242 13.9375 4.7476 13.9627 4.80835C13.9879 4.86909 14.0009 4.93421 14.0009 4.99998C14.0009 5.06575 13.9879 5.13087 13.9627 5.19161C13.9375 5.25236 13.9006 5.30753 13.854 5.35398L9.854 9.35398C9.76011 9.44787 9.63278 9.50061 9.5 9.50061C9.36722 9.50061 9.23989 9.44787 9.146 9.35398C9.05211 9.26009 8.99937 9.13275 8.99937 8.99998C8.99937 8.8672 9.05211 8.73987 9.146 8.64598L12.293 5.49998L0.5 5.49998C0.367392 5.49998 0.240215 5.4473 0.146447 5.35353C0.0526784 5.25976 0 5.13259 0 4.99998Z"
                                                fill="#178b01" />
                                        </svg>
                                    </span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- @foreach ($actualites as $actualite)
                    <div class="col-md-4 my-5 actualite-item">
                        <a href="{{ route('actualite-detail', $actualite->id) }}">
                            <div class="card">
                                <span class="actualite-date">
                                    {{ date('d', strtotime($actualite->created_at)) }}<br>{{ date('M', strtotime($actualite->created_at)) }}.<br>{{ date('Y', strtotime($actualite->created_at)) }}</span>
                                <img src="{{ asset('storage/' . $actualite->photo) }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <p class="card-title actualite-item-link">{{ substr($actualite->titre, 0, 100) }}....</p>
                                </div>
                                <a href="{{ route('actualite-detail', $actualite->id) }}" class="lien-article">Lire
                                    l'article <span><svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 4.99998C0 4.86737 0.0526784 4.74019 0.146447 4.64643C0.240215 4.55266 0.367392 4.49998 0.5 4.49998L12.293 4.49998L9.146 1.35398C9.05211 1.26009 8.99937 1.13275 8.99937 0.999979C8.99937 0.867204 9.05211 0.739865 9.146 0.645979C9.23989 0.552093 9.36722 0.499348 9.5 0.499348C9.63278 0.499348 9.76011 0.552093 9.854 0.645979L13.854 4.64598C13.9006 4.69242 13.9375 4.7476 13.9627 4.80835C13.9879 4.86909 14.0009 4.93421 14.0009 4.99998C14.0009 5.06575 13.9879 5.13087 13.9627 5.19161C13.9375 5.25236 13.9006 5.30753 13.854 5.35398L9.854 9.35398C9.76011 9.44787 9.63278 9.50061 9.5 9.50061C9.36722 9.50061 9.23989 9.44787 9.146 9.35398C9.05211 9.26009 8.99937 9.13275 8.99937 8.99998C8.99937 8.8672 9.05211 8.73987 9.146 8.64598L12.293 5.49998L0.5 5.49998C0.367392 5.49998 0.240215 5.4473 0.146447 5.35353C0.0526784 5.25976 0 5.13259 0 4.99998Z"
                                                fill="#ff8000" />
                                        </svg>
                                    </span></a>
                            </div>
                        </a>
                    </div>
                @endforeach --}}
            </div>

        <div class="text-center my-5 all-actualite">
            <a href="{{ route('actualite') }}" class="lien-historique mt-2">
                Toutes nos actualités
                <span>
                    <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0 4.99998C0 4.86737 0.0526784 4.74019 0.146447 4.64643C0.240215 4.55266 0.367392 4.49998 0.5 4.49998L12.293 4.49998L9.146 1.35398C9.05211 1.26009 8.99937 1.13275 8.99937 0.999979C8.99937 0.867204 9.05211 0.739865 9.146 0.645979C9.23989 0.552093 9.36722 0.499348 9.5 0.499348C9.63278 0.499348 9.76011 0.552093 9.854 0.645979L13.854 4.64598C13.9006 4.69242 13.9375 4.7476 13.9627 4.80835C13.9879 4.86909 14.0009 4.93421 14.0009 4.99998C14.0009 5.06575 13.9879 5.13087 13.9627 5.19161C13.9375 5.25236 13.9006 5.30753 13.854 5.35398L9.854 9.35398C9.76011 9.44787 9.63278 9.50061 9.5 9.50061C9.36722 9.50061 9.23989 9.44787 9.146 9.35398C9.05211 9.26009 8.99937 9.13275 8.99937 8.99998C8.99937 8.8672 9.05211 8.73987 9.146 8.64598L12.293 5.49998L0.5 5.49998C0.367392 5.49998 0.240215 5.4473 0.146447 5.35353C0.0526784 5.25976 0 5.13259 0 4.99998Z"
                        fill="white" />
                    </svg>

                </span>
            </a>
            </div>
    </section>

    {{-- Activité section --}}
    <div style="background-color: #FF800008" class="border border-white mb-0">
        <section class="actualites my-5 container py-5 mt-5">

                <div class="presentation-title">
                    <h1
                        class=" fs-2 h1-rosette-presentation justify-content-flex-start align-items-center d-flex fw-bold">
                        Nos activités
                        <span class=" border-4  mx-3"></span>
                    </h1>
                    <h6>Nous intervenons dans les domaines d'ordre social tel que: la santé, l'éducation, la sexualité, la jeunesse et plein d'autres les activités scolaires et para-scolaires</h6>
                </div>

            <div class="container row m-auto actualite-item-container mt-4 ">

                @foreach ($activites as $activite)
                    <div class="col-md-4 actualite-item">
                        <div class="card">
                            <span class="actualite-date">
                                {{ date('d', strtotime($activite->created_at)) }}<br>{{ date('M', strtotime($activite->created_at)) }}.<br>{{ date('Y', strtotime($activite->created_at)) }}</span>
                            <img src="{{ asset('storage/' . $activite->photo) }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="activite-item-link card-title h3-rosette-presentation text-start ">
                                    {{ substr($activite->titre, 0, 50) }}....

                                </h5>
                                <a href="{{ route('activite-detail', $activite->id) }}"
                                    class="lien-article mt-5 float-end rosette-text-green fw-bold">Voir plus <span><svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 4.99998C0 4.86737 0.0526784 4.74019 0.146447 4.64643C0.240215 4.55266 0.367392 4.49998 0.5 4.49998L12.293 4.49998L9.146 1.35398C9.05211 1.26009 8.99937 1.13275 8.99937 0.999979C8.99937 0.867204 9.05211 0.739865 9.146 0.645979C9.23989 0.552093 9.36722 0.499348 9.5 0.499348C9.63278 0.499348 9.76011 0.552093 9.854 0.645979L13.854 4.64598C13.9006 4.69242 13.9375 4.7476 13.9627 4.80835C13.9879 4.86909 14.0009 4.93421 14.0009 4.99998C14.0009 5.06575 13.9879 5.13087 13.9627 5.19161C13.9375 5.25236 13.9006 5.30753 13.854 5.35398L9.854 9.35398C9.76011 9.44787 9.63278 9.50061 9.5 9.50061C9.36722 9.50061 9.23989 9.44787 9.146 9.35398C9.05211 9.26009 8.99937 9.13275 8.99937 8.99998C8.99937 8.8672 9.05211 8.73987 9.146 8.64598L12.293 5.49998L0.5 5.49998C0.367392 5.49998 0.240215 5.4473 0.146447 5.35353C0.0526784 5.25976 0 5.13259 0 4.99998Z"
                                                fill="#178b01" />
                                        </svg>
                                    </span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center my-5"><a href="{{ route('activite') }}" class="lien-historique mt-2">Toutes nos
                    activités <span><svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0 4.99998C0 4.86737 0.0526784 4.74019 0.146447 4.64643C0.240215 4.55266 0.367392 4.49998 0.5 4.49998L12.293 4.49998L9.146 1.35398C9.05211 1.26009 8.99937 1.13275 8.99937 0.999979C8.99937 0.867204 9.05211 0.739865 9.146 0.645979C9.23989 0.552093 9.36722 0.499348 9.5 0.499348C9.63278 0.499348 9.76011 0.552093 9.854 0.645979L13.854 4.64598C13.9006 4.69242 13.9375 4.7476 13.9627 4.80835C13.9879 4.86909 14.0009 4.93421 14.0009 4.99998C14.0009 5.06575 13.9879 5.13087 13.9627 5.19161C13.9375 5.25236 13.9006 5.30753 13.854 5.35398L9.854 9.35398C9.76011 9.44787 9.63278 9.50061 9.5 9.50061C9.36722 9.50061 9.23989 9.44787 9.146 9.35398C9.05211 9.26009 8.99937 9.13275 8.99937 8.99998C8.99937 8.8672 9.05211 8.73987 9.146 8.64598L12.293 5.49998L0.5 5.49998C0.367392 5.49998 0.240215 5.4473 0.146447 5.35353C0.0526784 5.25976 0 5.13259 0 4.99998Z"
                                fill="white" />
                        </svg>
                        </i></span></a></div>
        </section>
    </div>




    {{-- Testimony section --}}
   <div class="container-fluid text-white py-2" style="background-color: rgb(2,3,129)" >
    <section class="actualites my-5 pb-5 container pt-5" >
        <div class="actualites-title mb-5">
            <h1
            class=" fs-2 h1-rosette-presentation justify-content-flex-start align-items-center d-flex fw-bold">
            Témoignages
            <span class=" border-4  mx-3 bg-white"></span>
            </h1>

        </div>
        <div>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @if(!is_null($temoignages))
                    @foreach ($temoignages as $key=>$temoignage)
                        <div class="carousel-item {{ $key==0? 'active' :''}}" data-bs-interval="10000">
                                <p class="w-75 text-center text-justify" style="margin-left: 12%; line-height:30px;">
                                    << {{ strip_tags( $temoignage->message) }} >>
                                </p>
                                <p class="nom text-center fw-bold" >
                                        {{ $temoignage->nom.' '.$temoignage->prenom }}- DEV WEB
                                </p>
                                <div class=" d-flex justify-content-center">
                                    <img src="{{ 'storage/'.$temoignage->photo }}" alt="" width="50" height="50" class=" rounded-circle">
                                </div>
                        </div>
                    @endforeach
                    @endif

                </div>
                <button class="carousel-control-prev bg-dark rounded-pill" style=" margin-top:50px; width: 50px; height:50px;" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next bg-dark rounded-pill" style=" margin-top:50px; width: 50px; height:50px;" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
              </div>
        </div>

    </section>
   </div>

    {{-- Partenaire section --}}
    <section class="actualites my-5 container pt-5">
        <div class="actualites-title mb-5">
            <h1
                class=" fs-2 h1-rosette-presentation justify-content-flex-start align-items-center d-flex fw-bold">
                Nos partenaires
                <span class=" border-4  mx-3"></span>
            </h1>
        </div>
        <div class="container row m-auto actualite-item-container">
            <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">

                <div class="carousel-inner ">
                    <div class="carousel-item active" data-bs-interval="7000">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('images/love.png') }}"
                                    class="d-block w-100 pb-3" alt="..." style="height: 200px">
                                <a href="#" class="fs-5 text-decoration-none">IFRI-UAC</a>
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('images/youth2.png') }} "
                                    class="d-block w-100 pb-3" alt="..." style="height: 200px">
                                <a href="#" class="fs-5 text-decoration-none">EPAC-UAC</a>
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('images/love.png') }} "
                                    class="d-block w-100 pb-3" alt="..." style="height: 200px">
                                <a href="#" class="fs-5 text-decoration-none">ENAM-UAC</a>
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('images/love.png') }} "
                                    class="d-block w-100 pb-3" alt="..." style="height: 200px">
                                <a href="#" class="fs-5 text-decoration-none">ENAM-UAC</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="7000">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('images/love.png') }}"
                                    class="d-block w-100 pb-3" alt="..." style="height: 200px">
                                <a href="#" class="fs-5 text-decoration-none">ENEAM-UAC</a>
                            </div>
                            <div class="col-3">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                                    class="d-block w-100 pb-3" alt="..." style="height: 200px">
                                <a href="#" class="fs-5 text-decoration-none">INJEPS-UAC</a>
                            </div>
                            <div class="col-3">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                                    class="d-block w-100 pb-3" alt="..." style="height: 200px">
                                <a href="#" class="fs-5 text-decoration-none">FSA-UAC</a>
                            </div>
                            <div class="col-3">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                                    class="d-block w-100 pb-3" alt="..." style="height: 200px">
                                <a href="#" class="fs-5 text-decoration-none">INJEPS-UAC</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-3">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                                    class="d-block w-100 pb-3" alt="..." style="height: 200px">
                                <a href="#" class="fs-5 text-decoration-none">INE-UAC</a>
                            </div>
                            <div class="col-3">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                                    class="d-block w-100 pb-3" alt="..." style="height: 200px">
                                <a href="#" class="fs-5 text-decoration-none">FAST-UAC</a>
                            </div>
                            <div class="col-3">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                                    class="d-block w-100 pb-3" alt="..." style="height: 200px">
                                <a href="#" class="fs-5 text-decoration-none">FADESP-UAC</a>
                            </div>
                            <div class="col-3">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                                    class="d-block w-100 pb-3" alt="..." style="height: 200px">
                                <a href="#" class="fs-5 text-decoration-none">FAST-UAC</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>


        <div class="text-center my-5"><a href="{{ route('contact') }}" class="lien-historique mt-2">Rejoignez-nous en tant que
                partenaire <span><svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 4.99998C0 4.86737 0.0526784 4.74019 0.146447 4.64643C0.240215 4.55266 0.367392 4.49998 0.5 4.49998L12.293 4.49998L9.146 1.35398C9.05211 1.26009 8.99937 1.13275 8.99937 0.999979C8.99937 0.867204 9.05211 0.739865 9.146 0.645979C9.23989 0.552093 9.36722 0.499348 9.5 0.499348C9.63278 0.499348 9.76011 0.552093 9.854 0.645979L13.854 4.64598C13.9006 4.69242 13.9375 4.7476 13.9627 4.80835C13.9879 4.86909 14.0009 4.93421 14.0009 4.99998C14.0009 5.06575 13.9879 5.13087 13.9627 5.19161C13.9375 5.25236 13.9006 5.30753 13.854 5.35398L9.854 9.35398C9.76011 9.44787 9.63278 9.50061 9.5 9.50061C9.36722 9.50061 9.23989 9.44787 9.146 9.35398C9.05211 9.26009 8.99937 9.13275 8.99937 8.99998C8.99937 8.8672 9.05211 8.73987 9.146 8.64598L12.293 5.49998L0.5 5.49998C0.367392 5.49998 0.240215 5.4473 0.146447 5.35353C0.0526784 5.25976 0 5.13259 0 4.99998Z"
                            fill="white" />
                    </svg>
                    </i></span></a></div>
    </section>


    <script>
        $('document').ready(function() {

            if (window.matchMedia('(max-width: 1350px)').matches){
                $('.first-banner').addClass('ms-5');
            }
            if (window.matchMedia('(max-width: 768px)').matches){
                $('.first-banner').addClass('ms-5');
            }
            if (window.matchMedia('(max-width: 600px)').matches){
                $('.presentation-container').removeClass('mt-5');
                $('.presentation-container-parent').removeClass('mt-5 pb-5');
                $('.atouts').removeClass('mt-5');
                $('.actualites').removeClass('my-5');
                $('.actualites').removeClass('py-5');
                $('.all-actualite').addClass('my-3');
                $('.all-actualite').removeClass('my-3');

            }


            // $("#div-grand-benin").animate({
            //     left: '250px',
            //     opacity: '0.5',
            //     height: '150px',
            //     width: '150px'
            // });

        })
    </script>
@endsection



{{-- -listes des abonnes newsletters
-listes des messages (formulaire de contact)
-'' candudature aux offres
-''participants aux events --}}
