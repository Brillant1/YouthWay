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

    <section class="mt-5 pt-5">
        <div class="category-nav">
            <ul class=" d-flex text-decoration-none list-unstyled justify-content-between pb-4">
                <li class=""><a href="" class="">Toutes</a></li>
                <li class=""><a href="" class="">Education</a></li>
                <li class=""><a href="" class="">Jeunesse</a></li>
                <li class=""><a href="" class="">Sport</a></li>
            </ul>
        </div>
        <div class="container-fluid d-flex justify-content-center mt-3">
            <div class="container-activty-category container-all-activity row row-cols-1 row-cols-md-3 g-4">
                <div class="col-lg-4 col-md-6  col-sm-12 card-container-activity">
                    <a href="#" class="text-dark">
                        <div class="card">
                            <img src="{{ asset('images/activity1.jpeg') }}" class="card-img-top" alt="...">
                            <div class="card-body ps-0">
                                <h5 class="card-title font-weight-bold fs-5 title-activity">Don de kit scolaire à l'EPP
                                    Botti ...</h5>
                                <p class="card-text mt-3 title-activity-content">This is a longer card with supporting
                                    text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer .....</p>

                                <div class="d-flex justify-content-between mt-4">
                                    <p class="font-bold">Publié le: 20-08-2022</p>
                                    <p class="text-primary font-bold">Voir plus

                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="blue" class="bi bi-arrow-right fw-bold" viewBox="0 0 16 16">
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
                <div class="col-lg-4 col-md-6  col-sm-12 card-container-activity">
                    <a href="#" class="text-dark">
                        <div class="card">
                            <img src="{{ asset('images/activity2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body ps-0">
                                <h5 class="card-title font-weight-bold fs-5 title-activity">Formation des élèves
                                    infirmiers du centre ...</h5>
                                <p class="card-text mt-3 title-activity-content">This is a longer card with supporting
                                    text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer .....</p>

                                <div class="d-flex justify-content-between mt-4">
                                    <p class="font-bold">Publié le: 20-08-2022</p>
                                    <p class="text-primary font-bold">Voir plus

                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="blue" class="bi bi-arrow-right fw-bold" viewBox="0 0 16 16">
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
                <div class="col-lg-4 col-md-6  col-sm-12  card-container-activity">
                    <a href="#" class="text-dark">
                        <div class="card">
                            <img src="{{ asset('images/activity3.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body ps-0">
                                <h5 class="card-title font-weight-bold fs-5 title-activity">Promotion de l'excellence en
                                    milieu...</h5>
                                <p class="card-text mt-3 title-activity-content">This is a longer card with supporting
                                    text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer .....</p>

                                <div class="d-flex justify-content-between mt-4">
                                    <p class="font-bold">Publié le: 20-08-2022</p>
                                    <p class="text-primary font-bold">Voir plus

                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="blue" class="bi bi-arrow-right fw-bold" viewBox="0 0 16 16">
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

                <div class="col-lg-4 col-md-6  col-sm-12  card-container-activity">
                    <a href="#" class="text-dark">
                        <div class="card">
                            <img src="{{ asset('images/activity1.jpeg') }}" class="card-img-top" alt="...">
                            <div class="card-body ps-0">
                                <h5 class="card-title font-weight-bold fs-5 title-activity">Don de kit scolaire à l'EPP
                                    Botti ...</h5>
                                <p class="card-text mt-3 title-activity-content">This is a longer card with supporting
                                    text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer .....</p>

                                <div class="d-flex justify-content-between mt-4">
                                    <p class="font-bold">Publié le: 20-08-2022</p>
                                    <p class="text-primary font-bold">Voir plus

                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="blue" class="bi bi-arrow-right fw-bold" viewBox="0 0 16 16">
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
                <div class="col-lg-4 col-md-6  col-sm-12  card-container-activity">
                    <a href="#" class="text-dark">
                        <div class="card">
                            <img src="{{ asset('images/activity2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body ps-0">
                                <h5 class="card-title font-weight-bold fs-5 title-activity">Formation des élèves
                                    infirmiers du centre ...</h5>
                                <p class="card-text mt-3 title-activity-content">This is a longer card with supporting
                                    text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer .....</p>

                                <div class="d-flex justify-content-between mt-4">
                                    <p class="font-bold">Publié le: 20-08-2022</p>
                                    <p class="text-primary font-bold">Voir plus

                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="blue" class="bi bi-arrow-right fw-bold" viewBox="0 0 16 16">
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
                <div class="col-lg-4 col-md-6  col-sm-12  card-container-activity">
                    <a href="#" class="text-dark">
                        <div class="card">
                            <img src="{{ asset('images/activity3.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body ps-0">
                                <h5 class="card-title font-weight-bold fs-5 title-activity">Promotion de l'excellence
                                    en milieu...</h5>
                                <p class="card-text mt-3 title-activity-content">This is a longer card with supporting
                                    text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer .....</p>

                                <div class="d-flex justify-content-between mt-4">
                                    <p class="font-bold">Publié le: 20-08-2022</p>
                                    <p class="text-primary font-bold">Voir plus

                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="blue" class="bi bi-arrow-right fw-bold" viewBox="0 0 16 16">
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
            </div>

        </div>
    </section>

    <div id="carouselExampleIndicators" class="carousel slide container-fluid p-0 m-0 position-relative mt-5"
        data-bs-ride="carousel">
        <div class=" historique-container d-flex justify-content-center align-items-center flex-column">
            <h3 class="text-white ms-5 fw-bold text-center" style="line-height:50px;">
                Vous jugez interessantes les actions que nous menons et voulez nous soutenir ?
            </h3>
            <p class="w-75 text-center fs-5 text-white">
                Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.
            </p>
            <button class="btn btn-light font-bold btn-sm rounded-pill fs-6 mt-3 px-5 py-3 text-uppercase">Soutenez-nous ici
                &nbsp;
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        fill="dark" class="bi bi-arrow-right fw-bold" viewBox="0 0 16 16">
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

@endsection
