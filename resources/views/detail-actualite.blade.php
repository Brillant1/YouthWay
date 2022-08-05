@extends('partials.template')
@section('content')
    <style>
        .detail-article {
            padding: 10px;
            color: white;
            display: flex;
            justify-content: space-between;
            border-top: 10px solid black;
        }

        /* .detail-article>div {
                    background-color: rgb(232, 231, 231);
                    padding: 5px 15px ;
                } */
        .detail-article>div>p:first-child {
            font-size: 1.5rem;
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: underline;
        }

        .detail-article>div>p:last-child {
            font-size: 1.2rem;
        }
    </style>
    <div id="carouselExampleIndicators" class="carousel slide container-fluid p-0 m-0   position-relative"
        data-bs-ride="carousel">
        <div class=" historique-container d-flex justify-content-center flex-column">
            <h1 class="text-white ms-5 fw-bold text-center" style="line-height:50px;">
                NOS ACTUALITÉS
            </h1>
        </div>
        <div class="carousel-inner historique-img-container-parent">
            <div class="carousel-item active historique-img-container">

            </div>
        </div>
    </div>

    <section>
        <div class="container-fluid mt-5 d-flex justify-content-end">
            <div class="row " style="width: 90%;">

                <div class="d-flex justify-content-between mb-4 pb-3 " style="width: 87%; border-bottom: 1px solid silver">
                    <p class="h3">Détail sur l'article</p>
                    <a href="" class="h4 fw-bold" style="word-spacing: 10px; letter-spacing:5px">Tous les
                        secteurs</a>
                </div>
                <div class="col-lg-8">
                    <img src="{{ asset('storage/' . $actualite->photo) }}" alt="" class="ps-0 w-100">
                    <div class="d-flex justify-content-between align-items-center fs-5 mt-5">
                        <h6>Publié le : {{ $actualite->created_at->format('d-m-Y') }}</h6>
                        <div class="d-flex">
                            <p
                                class="py-1 text-uppercase d-flex justify-content-center align-items-center px-4 rounded-pill fw-bold fs-6
                            @if ($actualite->statut == 'en cours') bg-warning text-dark @elseif($actualite->statut == 'nouveau') bg-danger text-white @endif">
                                {{ $actualite->statut }}</p>
                            &nbsp;&nbsp;
                            <p>PROJET</p> &nbsp; &nbsp;
                            <p><a href="#" class="text-uppercase">{{ $actualite->domaine }}</a></p> &nbsp; &nbsp;
                            <p>PILIER 2</p>
                        </div>

                    </div>
                    <h2 class="my-3">{{ $actualite->titre }}</h2>
                    <div class="" style="line-height: 30px; font-size:1.2rem">
                        {!! $actualite->description !!}
                    </div>

                    <div class=" detail-article bg-success mt-5">
                        <div class="">
                            <p>Coût estimatif : </p>
                            <p class="text-uppercase fs-5 bg-white text-danger rounded p-2">{{ $actualite->cout }}</p>
                        </div>
                        <div class="">
                            <p>Zone d'intervention : </p>
                            <p>{{ $actualite->zone_intervention }}</p>
                        </div>
                        <div class="">
                            <p>Délai d'exécution : </p>
                            <p>{{ $actualite->date_debut }} - {{ $actualite->date_fin }} </p>
                        </div>
                        <div class="">
                            <p>Votre soutien :</p>
                            <button class="btn bg-white text-sccess fs-5 text-danger kkiapay-button">Je soutiens
                                ici</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2 class="" style="border-bottom: 2px solid #f58000">Actualités</h2>
                    @if (sizeof($actualites)>0)
                    @foreach ($actualites as $actualiteAll)
                        <div class="d-flex p-2 rounded mt-4"
                            style="border-bottom: 1px solid silver;border-right: 1px solid silver">
                            <img src=" {{ asset('storage/' .$actualiteAll->photo) }}" alt="" class="rounded"
                                style="width: 230px; height: 150px; objet-fit:cover">
                            <div class="ps-3 ">
                                <p class=" fs-5"> {{  Str::substr($actualiteAll->titre,0,40).'...' }}</p>
                                <a href="" style="font-size: 1.2rem; float: right; color:#f58000"
                                    class="pe-3 fw-bold">Lire l'article
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#f58000"
                                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    @endif
                    {{-- <div class="d-flex p-2 rounded mt-4"
                        style="border-bottom: 1px solid silver;border-right: 1px solid silver">
                        <img src=" {{ asset('images/card/2.png') }}" alt="" class="rounded"
                            style="width: 230px; height: 150px; objet-fit:cover">
                        <div class="ps-3 ">
                            <p class=" fs-5"> Programme de coaching personnel dans la
                                commune de Ouidah</p>
                            <a href="" style="font-size: 1.2rem; float: right; color:#f58000"
                                class="pe-3 fw-bold">Lire l'article
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#f58000"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>


                    </div>

                    <div class="d-flex p-2 rounded mt-4"
                        style="border-bottom: 1px solid silver;border-right: 1px solid silver">
                        <img src=" {{ asset('images/card/3.png') }}" alt="" class="rounded"
                            style="width: 230px; height: 150px; objet-fit:cover">
                        <div class="ps-3 ">
                            <p class=" fs-5"> Programme de coaching personnel dans la
                                commune de Ouidah</p>
                            <a href="" style="font-size: 1.2rem; float: right; color:#f58000"
                                class="pe-3 fw-bold">Lire l'article
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#f58000"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>


                    </div>

                    <div class="d-flex p-2 rounded mt-4"
                        style="border-bottom: 1px solid silver;border-right: 1px solid silver">
                        <img src=" {{ asset('images/card/3.png') }}" alt="" class="rounded"
                            style="width: 230px; height: 150px; objet-fit:cover">
                        <div class="ps-3 ">
                            <p class=" fs-5"> Programme de coaching personnel dans la
                                commune de Ouidah</p>
                            <a href="" style="font-size: 1.2rem; float: right; color:#f58000"
                                class="pe-3 fw-bold">Lire l'article
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#f58000"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>


                    </div> --}}
                </div>
            </div>
    </section>

    <script amount=5000 email="" position="center" theme="#032497F5" phone="97000000" firstname="" lastname=""
        sandbox="true" callback=" " key="0b7354b0ed5a11ec848227abfc492dc7" src="https://cdn.kkiapay.me/k.js"></script>
@endsection
