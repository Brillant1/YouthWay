@extends('partials.template')
@section('content')
    <section class="mb-5 pb-5 presentation-rose-rosette mx-5">
        <div class="container presentation-container mb-5 mt-5 ">
            <div class="row presentation-scolaire justify-content-between">
                <div class="context-presentation col-md-6 col-lg-6 col-xl-6 d-flex align-items-center">
                    <div class="context-presentation-content">
                        <div class="presentation-title">
                            <h1
                                class=" h1-rosette-presentation justify-content-flex-start align-items-center d-flex fw-bold">
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
                <div class="context-video col-md-6 col-lg-6 col-xl-6">
                    <div class="video-back">
                        <div class="video-iframe basic-2">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=WLHUJvoVb5I" data-effect="fadeIn"
                                style="width: 100%;height:100%;border-radius:20px;"> <img class="img-fluid"
                                    style="width: 100%;height:100%;border-radius:20px;object-fit:cover;"
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

    <section class="atouts my-5 container " style="margin-top: 100px;">
        <div class="atouts-title mt-5 mb-5 pt-5">
            <h1 class=" h1-rosette-presentation justify-content-flex-start align-items-center d-flex fw-bold fs-1">Nos
                domaines d'intervention <span class=" border-4  mx-3"></span></h1>
            <h5>Nous proposons les activités scolaires et para-scolaires</h5>
        </div>
        <div class="container row m-auto atout-item-container">
            <div class="col-md-4 atout-item">
                <div class="card">
                    <img src="{{ asset('images/card/3.png') }}" class="card-img-top" alt="">
                    <div class="card-body ">
                        <h3 class="card-title h3-rosette-presentation text-center rosette-text-orange">Santé sexuelle</h3>
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
                        <h3 class="card-title h3-rosette-presentation text-center rosette-text-orange ">Jeunesse</h3>
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
                        <h3 class="card-title h3-rosette-presentation text-center rosette-text-orange  ">Education</h3>
                        <p class="card-text text-center">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper
                            sit amet ligula. Lorem ipsum dolor sit amet, consectetur. </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center my-5"><a href="{{ route('domaine') }}" class="lien-historique mt-2">Voir plus <span><svg
                        width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 4.99998C0 4.86737 0.0526784 4.74019 0.146447 4.64643C0.240215 4.55266 0.367392 4.49998 0.5 4.49998L12.293 4.49998L9.146 1.35398C9.05211 1.26009 8.99937 1.13275 8.99937 0.999979C8.99937 0.867204 9.05211 0.739865 9.146 0.645979C9.23989 0.552093 9.36722 0.499348 9.5 0.499348C9.63278 0.499348 9.76011 0.552093 9.854 0.645979L13.854 4.64598C13.9006 4.69242 13.9375 4.7476 13.9627 4.80835C13.9879 4.86909 14.0009 4.93421 14.0009 4.99998C14.0009 5.06575 13.9879 5.13087 13.9627 5.19161C13.9375 5.25236 13.9006 5.30753 13.854 5.35398L9.854 9.35398C9.76011 9.44787 9.63278 9.50061 9.5 9.50061C9.36722 9.50061 9.23989 9.44787 9.146 9.35398C9.05211 9.26009 8.99937 9.13275 8.99937 8.99998C8.99937 8.8672 9.05211 8.73987 9.146 8.64598L12.293 5.49998L0.5 5.49998C0.367392 5.49998 0.240215 5.4473 0.146447 5.35353C0.0526784 5.25976 0 5.13259 0 4.99998Z"
                            fill="white" />
                    </svg>
                    </i></span></a></div>
    </section>


    <section class="actualites my-5 container">
        <div class="actualites-title mb-5">
            <h1 class=" h1-rosette-presentation justify-content-flex-start align-items-center d-flex ">
                <p class="actualite-container-title">Nos actualités</p> <span class=" border-4  mx-3"></span>
            </h1>
        </div>
        <div class="container row m-auto actualite-item-container">

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
                                class="lien-article mt-5 float-end rosette-text-orange fw-bold">Lire
                                l'article <span><svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 4.99998C0 4.86737 0.0526784 4.74019 0.146447 4.64643C0.240215 4.55266 0.367392 4.49998 0.5 4.49998L12.293 4.49998L9.146 1.35398C9.05211 1.26009 8.99937 1.13275 8.99937 0.999979C8.99937 0.867204 9.05211 0.739865 9.146 0.645979C9.23989 0.552093 9.36722 0.499348 9.5 0.499348C9.63278 0.499348 9.76011 0.552093 9.854 0.645979L13.854 4.64598C13.9006 4.69242 13.9375 4.7476 13.9627 4.80835C13.9879 4.86909 14.0009 4.93421 14.0009 4.99998C14.0009 5.06575 13.9879 5.13087 13.9627 5.19161C13.9375 5.25236 13.9006 5.30753 13.854 5.35398L9.854 9.35398C9.76011 9.44787 9.63278 9.50061 9.5 9.50061C9.36722 9.50061 9.23989 9.44787 9.146 9.35398C9.05211 9.26009 8.99937 9.13275 8.99937 8.99998C8.99937 8.8672 9.05211 8.73987 9.146 8.64598L12.293 5.49998L0.5 5.49998C0.367392 5.49998 0.240215 5.4473 0.146447 5.35353C0.0526784 5.25976 0 5.13259 0 4.99998Z"
                                            fill="#ff8000" />
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

        <div class="text-center my-5"><a href="{{ route('actualite') }}" class="lien-historique mt-2">Toutes nos
                actualités <span><svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 4.99998C0 4.86737 0.0526784 4.74019 0.146447 4.64643C0.240215 4.55266 0.367392 4.49998 0.5 4.49998L12.293 4.49998L9.146 1.35398C9.05211 1.26009 8.99937 1.13275 8.99937 0.999979C8.99937 0.867204 9.05211 0.739865 9.146 0.645979C9.23989 0.552093 9.36722 0.499348 9.5 0.499348C9.63278 0.499348 9.76011 0.552093 9.854 0.645979L13.854 4.64598C13.9006 4.69242 13.9375 4.7476 13.9627 4.80835C13.9879 4.86909 14.0009 4.93421 14.0009 4.99998C14.0009 5.06575 13.9879 5.13087 13.9627 5.19161C13.9375 5.25236 13.9006 5.30753 13.854 5.35398L9.854 9.35398C9.76011 9.44787 9.63278 9.50061 9.5 9.50061C9.36722 9.50061 9.23989 9.44787 9.146 9.35398C9.05211 9.26009 8.99937 9.13275 8.99937 8.99998C8.99937 8.8672 9.05211 8.73987 9.146 8.64598L12.293 5.49998L0.5 5.49998C0.367392 5.49998 0.240215 5.4473 0.146447 5.35353C0.0526784 5.25976 0 5.13259 0 4.99998Z"
                            fill="white" />
                    </svg>
                    </i></span></a></div>
    </section>

    <section class="actualites my-5 container pt-5">
        <div class="actualites-title mb-5">
            <h1 class=" h1-rosette-presentation justify-content-flex-start align-items-center d-flex ">
                <p class="actualite-container-title">Nos partenaires</p> <span class=" border-4  mx-3"></span>
            </h1>
        </div>
        <div class="container row m-auto actualite-item-container">
            <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel" >

                <div class="carousel-inner ">
                  <div class="carousel-item active" data-bs-interval="7000">
                    <div class="row">
                        <div class="col-4">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg " class="d-block w-100 pb-3" alt="..." style="height: 200px">
                            <a href="#" class="fs-5 text-decoration-none">IFRI-UAC</a>
                        </div>
                        <div class="col-4">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg " class="d-block w-100 pb-3" alt="..." style="height: 200px">
                            <a href="#" class="fs-5 text-decoration-none">EPAC-UAC</a>
                        </div>
                        <div class="col-4">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg " class="d-block w-100 pb-3" alt="..." style="height: 200px">
                            <a href="#" class="fs-5 text-decoration-none">ENAM-UAC</a>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="7000">
                    <div class="row">
                        <div class="col-4">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg" class="d-block w-100 pb-3" alt="..." style="height: 200px">
                            <a href="#" class="fs-5 text-decoration-none">ENEAM-UAC</a>
                        </div>
                        <div class="col-4">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg" class="d-block w-100 pb-3" alt="..." style="height: 200px">
                            <a href="#" class="fs-5 text-decoration-none">INJEPS-UAC</a>
                        </div>
                        <div class="col-4">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg" class="d-block w-100 pb-3" alt="..." style="height: 200px">
                            <a href="#" class="fs-5 text-decoration-none">FSA-UAC</a>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                        <div class="col-4">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg" class="d-block w-100 pb-3" alt="..." style="height: 200px">
                            <a href="#" class="fs-5 text-decoration-none">INE-UAC</a>
                        </div>
                        <div class="col-4">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg" class="d-block w-100 pb-3" alt="..." style="height: 200px">
                            <a href="#" class="fs-5 text-decoration-none">FAST-UAC</a>
                        </div>
                        <div class="col-4">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg" class="d-block w-100 pb-3" alt="..." style="height: 200px">
                            <a href="#" class="fs-5 text-decoration-none">FADESP-UAC</a>
                        </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

        </div>


        <div class="text-center my-5"><a href="#" class="lien-historique mt-2">Rejoignez-nous en tant que partenaire <span><svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0 4.99998C0 4.86737 0.0526784 4.74019 0.146447 4.64643C0.240215 4.55266 0.367392 4.49998 0.5 4.49998L12.293 4.49998L9.146 1.35398C9.05211 1.26009 8.99937 1.13275 8.99937 0.999979C8.99937 0.867204 9.05211 0.739865 9.146 0.645979C9.23989 0.552093 9.36722 0.499348 9.5 0.499348C9.63278 0.499348 9.76011 0.552093 9.854 0.645979L13.854 4.64598C13.9006 4.69242 13.9375 4.7476 13.9627 4.80835C13.9879 4.86909 14.0009 4.93421 14.0009 4.99998C14.0009 5.06575 13.9879 5.13087 13.9627 5.19161C13.9375 5.25236 13.9006 5.30753 13.854 5.35398L9.854 9.35398C9.76011 9.44787 9.63278 9.50061 9.5 9.50061C9.36722 9.50061 9.23989 9.44787 9.146 9.35398C9.05211 9.26009 8.99937 9.13275 8.99937 8.99998C8.99937 8.8672 9.05211 8.73987 9.146 8.64598L12.293 5.49998L0.5 5.49998C0.367392 5.49998 0.240215 5.4473 0.146447 5.35353C0.0526784 5.25976 0 5.13259 0 4.99998Z"
                        fill="white" />
                </svg>
                </i></span></a></div>
    </section>
    <section class="actualites my-5 container pt-5">
        <div class="actualites-title mb-5">
            <h1 class=" h1-rosette-presentation justify-content-flex-start align-items-center d-flex ">
                <p class="actualite-container-title">Témoignages</p> <span class=" border-4  mx-3"></span>
            </h1>
        </div>
        <div class="container row m-auto actualite-item-container">
            
        </div>
    </section>
@endsection
