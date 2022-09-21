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
                    <div class="mb-3" style="line-height: 30px; font-size:1.2rem">
                        {!! $actualite->description !!}
                    </div>

                    <div class=" mb-3 detail-article bg-success mt-5">
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


                    <div><a href="http://www.facebook.com/sharer.php?u={{ url()->current() }}" target="_blank"
                        class="article-link article-link-f"><i class="fab fa-facebook-f"></i> &nbsp;Facebook</a></div>
                    {{-- Sharing on media link --}}
                    <div class="  mt-5 col-12 col-md-12 d-flex justify-content-between align-items-center font-bold page-media-link">
                        <p>Partager sur: </p>

                            <a href="http://www.facebook.com/sharer.php?u={{ url()->current() }}" class="font-bold text-white py-2 px-5 rounded-pill footer-inscription-link bg-facebook-link" target="_blank"
                            id="footer-inscription-link" target="_blank" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                            Facebook
                            </a>

                            <div><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title={{ $actualite->titre }}&summary={{ $actualite->description }}"
                                class="article-link article-link-l" target="_blank">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>

                                &nbsp;
                                Linkedin</a></div>

                        {{-- <a href="#" class="font-bold text-white py-2 px-5 rounded-pill footer-inscription-link bg-linkdin-link"
                            id="footer-inscription-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>
                            Linkdin
                        </a>
                        <a href="#" class="font-bold text-white py-2 px-5 rounded-pill footer-inscription-link bg-twitter-link"
                            id="footer-inscription-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                            Twitter
                        </a>
                        <a href="#" class="font-bold bg-orange text-white py-2 px-5 rounded-pill footer-inscription-link"
                            id="footer-inscription-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                            </svg>
                            Envoyer par mail
                        </a> --}}
                    </div>
                    {{--End sharing on media link --}}

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
                </div>


            </div>
    </section>

    <script amount=5000 email="" position="center" theme="#032497F5" phone="97000000" firstname="" lastname=""
        sandbox="true" callback=" " key="0b7354b0ed5a11ec848227abfc492dc7" src="https://cdn.kkiapay.me/k.js"></script>
@endsection
