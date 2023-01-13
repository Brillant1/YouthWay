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




                <div class="col-lg-8 shadow px-3" style="border-radius: 15px;">
                    <img src="{{ asset('storage/' . $actualite->photo) }}" alt="" class="ps-0 w-100">
                    <div class="d-flex justify-content-between align-items-center fs-5 mt-5">
                        <h6>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ff8000"
                                class="bi bi-calendar2-fill" viewBox="0 0 16 16">
                                <path
                                    d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM2.545 3h10.91c.3 0 .545.224.545.5v1c0 .276-.244.5-.546.5H2.545C2.245 5 2 4.776 2 4.5v-1c0-.276.244-.5.545-.5z" />
                            </svg> &nbsp;
                            @php
                                $date_debut = strtotime($actualite->date_debut);
                                $date_debut = date('m-d-Y', $date_debut);
                                $date_fin = strtotime($actualite->date_fin);
                                $date_fin = date('m-d-Y', $date_fin);
                            @endphp


                            <span class="">Du {{ $date_debut }} au {{ $date_fin }}</span> <br>

                            <p class="mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ff8000"
                                    class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>&nbsp;
                                <span>{{ $actualite->zone_intervention }}</span>
                            </p>

                        </h6>



                        <div class="">
                            <p>Coût: {{ $actualite->cout }}</p>

                            <p
                                class=" text-uppercase d-flex justify-content-center align-items-center rounded-pill

                            @if ($actualite->statut == 'en cours') color-green text-white @elseif($actualite->statut == 'nouveau') bg-danger text-white @endif">
                                {{ $actualite->statut }}
                            </p>


                        </div>

                    </div>
                    <h2 class="my-3 rosette-text-orange">{{ $actualite->titre }}</h2>
                    <hr>
                    <div class="mb-3" style="line-height: 30px; font-size:1.2rem">
                        {!! $actualite->description !!}
                    </div>

                    <div class=" mb-3 detail-article bg-info mt-5">
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
                            <p>{{ $date_debut }} au {{ $date_fin }} </p>
                        </div>
                        <div class="">
                            <p>Votre soutien :</p>
                            <button class="btn bg-white text-sccess fs-5 text-danger pay-btn">Je soutiens
                                ici</button>
                        </div>
                    </div>



                    {{-- Sharing on media link --}}



                        <div class="container-fluid d-flex justify-content-center flex-column mt-2">
                            <div class="container shadow py-5 rounded  d-flex justify-content-center align-items-center flex-column soutien-actualite-content">
                                <h2 class="text-center"><span>Nous avons besoin de votre soutien pour impacter plus.</span></h2>
                                <p class="px-2  mt-3 mb-2 inscrire-reinscrire-content text-inscription text-center " style="font-size: 1.2rem; width:80%;">"Le bien que l'on fait, le ciel le rend. Le bien que l'on garde, la terre le prend. On ne donne jamais
                                    rien sans l'avoir reçu et tout ce qui n'est pas donné est perdu" Pape Jean-Paul II</p>
                                    <div class="d-flex justify-content-center w-75 mt-4 fs-6" >
                                        <a href="#" class=" btn rounded fw-bold bg-success text-white px-4 py-3 me-3 text-center pay-btn" >Nous soutenir</a>
                                    </div>

                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="d-flex align-items-center py-5">
                                    Partager sur:
                                    <a href="http://www.facebook.com/sharer.php?u={{ url()->current() }}"
                                        class="font-bold footer-inscription-link ms-3" target="_blank" id="footer-inscription-link"
                                        target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                            class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg>

                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title={{ $actualite->titre }}&summary={{ $actualite->description }}"
                                        class=" rounded-circle footer-inscription-link ms-3" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                            class="bi bi-linkedin" viewBox="0 0 16 16">
                                            <path
                                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                        </svg>
                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title={{ $actualite->titre }}&summary={{ $actualite->description }}"
                                        class=" rounded-circle footer-inscription-link ms-3" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                            class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg>
                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title={{ $actualite->titre }}&summary={{ $actualite->description }}"
                                        class=" rounded-circle footer-inscription-link ms-3" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path
                                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                        </div>




                </div>


                <div class="col-lg-4">
                    <h2 class="" style="border-bottom: 2px solid #f58000">Actualités</h2>
                    @if (sizeof($actualites) > 0)
                        @foreach ($actualites as $actualiteAll)
                            <div class="d-flex p-2 rounded mt-4"
                                style="border-bottom: 1px solid silver;border-right: 1px solid silver">
                                <img src=" {{ asset('storage/' . $actualiteAll->photo) }}" alt="" class="rounded"
                                    style="width: 230px; height: 150px; objet-fit:cover">
                                <div class="ps-3 ">
                                    <p class=" fs-5"> {{ Str::substr($actualiteAll->titre, 0, 40) . '...' }}</p>
                                    <a href="{{ route('actualite-detail', $actualite->id) }}" style="font-size: 1.2rem; float: right; color:#f58000"
                                        class="pe-3 fw-bold">Lire l'article
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="#f58000" class="bi bi-arrow-right" viewBox="0 0 16 16">
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

    {{-- <script amount=5000 email="" position="center" theme="#032497F5" phone="97000000" firstname="" lastname=""
        sandbox="true" callback=" " key="0b7354b0ed5a11ec848227abfc492dc7" src="https://cdn.kkiapay.me/k.js"></script> --}}
@endsection
