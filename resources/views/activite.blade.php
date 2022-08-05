@extends('partials.template')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide container-fluid p-0 m-0   position-relative"
        data-bs-ride="carousel">
        <div class=" historique-container d-flex justify-content-center flex-column">
            <h1 class="text-white ms-5 fw-bold text-center" style="line-height:50px;">
                NOS ACTIVITÉS
            </h1>
        </div>
        <div class="carousel-inner historique-img-container-parent">
            <div class="carousel-item active historique-img-container">

            </div>
        </div>
    </div>

    <section class="mt-5">
        <div class="container-fluid mt-5">
            <div class="container">
                <p class="text-center text-intervention">
                    Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non
                    nisi. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec sollicitudin
                    molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                    Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet .

                </p>
                <h3 class="text-center rosette-text-green font-bold py-2 pt-2">Nos intervenons et accompagnons dans plusieurs
                    domaines</h3>
            </div>
            <div class="container">

            </div>
        </div>
    </section>



    <section class="mt-5 d-flex justify-content-center">

        <div class="" style="width: 90%">
            <ul class=" nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all"
                        type="button" role="tab" aria-controls="all" aria-selected="true">Toutes les activités</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="sport-tab" data-bs-toggle="tab" data-bs-target="#sport"
                        type="button" role="tab" aria-controls="sport" aria-selected="false">Sport</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="jeunesse-tab" data-bs-toggle="tab" data-bs-target="#jeunesse"
                        type="button" role="tab" aria-controls="jeunesse" aria-selected="false">Jeunesse et Sexualité</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="scolaire-tab" data-bs-toggle="tab" data-bs-target="#scolaire"
                        type="button" role="tab" aria-controls="scolaire" aria-selected="false">Le leadership féminin</button>
                </li>
            </ul>

            <div class="tab-content container-fluid d-flex justify-content-center mt-3"  id="myTabContent">
                <div class=" tab-pane fade show active row row-cols-1 row-cols-md-3 g-4 d-flex" id="all" role="tabpanel" aria-labelledby="all-tab">
                    @if (sizeof($activites) > 0)
                        @foreach ($activites as $activite)
                            <div class="col-lg-4 col-md-6  col-sm-12  card-container-activity mt-5">
                                <a href="#" class="text-dark">
                                    <div class="card">
                                        <img src="{{ asset('storage/' . $activite->photo) }}" class="card-img-top" alt="...">
                                        <div class="card-body ps-0">
                                            <h5 class="card-title font-weight-bold fs-5 title-activity rosette-text-orange">{{ $activite->titre }}
                                            </h5>
                                            <p class="card-text mt-3 title-activity-content ">{!! Str::substr($activite->description, 0, 200) . '...' !!}</p>

                                            <div class="d-flex justify-content-between mt-4">
                                                <p class="font-bold">Publié le: {{ $activite->created_at->format('d-m-Y') }}</p>
                                                <p class="rosette-text-orange font-bold">Voir plus

                                                    <i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="#f58000" class="bi bi-arrow-right fw-bold"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                                        </svg>
                                                    </i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="tab-pane fade" id="sport" role="tabpanel" aria-labelledby="sport-tab">...</div>
                <div class="tab-pane fade" id="jeunesse" role="tabpanel" aria-labelledby="jeunesse-tab">...</div>
                <div class="tab-pane fade" id="scolaire" role="tabpanel" aria-labelledby="scolaire-tab">...</div>
            </div>



            @if (sizeof($activites) == 0)
                <div class=" mt-3 pb-4" style="margin-left: 120px;">
                    <h2>Aucune activité n'est disponible pour le moment.</h2>
                </div>
            @endif
        </div>
    </section>

    <div id="carouselExampleIndicators" class="carousel slide container-fluid p-0 m-0 position-relative mt-5"
        data-bs-ride="carousel">
        <div class=" historique-container d-flex justify-content-center align-items-center flex-column">
            <h3 class="text-white ms-5 fw-bold text-center" style="line-height:50px;">
                Vous jugez interessantes les actions que nous menons et voulez nous soutenir ?
            </h3>
            <p class="w-75 text-center fs-5 text-white">
                Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci
                luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit
                amet ligula. Proin eget tortor risus.
            </p>
            <button class=" kkiapay-button btn btn-light font-bold btn-sm rounded-pill fs-6 mt-3 px-5 py-3 text-uppercase">Soutenez-nous ici
                &nbsp;
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="dark"
                        class="bi bi-arrow-right fw-bold" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </i>
            </button>
        </div>
        <div class="carousel-inner historique-img-container-parent">
            <div class="carousel-item active historique-img-container">

            </div>
        </div>
    </div>

    <script amount=5000 email="" position="center" theme="#032497F5" phone="97000000"
    firstname="" lastname="" sandbox="true" callback=" "
    key="0b7354b0ed5a11ec848227abfc492dc7" src="https://cdn.kkiapay.me/k.js">
</script>
@endsection
