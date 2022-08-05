@extends('partials.template')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide container-fluid p-0 m-0   position-relative"
        data-bs-ride="carousel">
        <div class=" historique-container d-flex justify-content-center flex-column">
            <h1 class="text-white ms-5 fw-bold text-center" style="line-height:50px;">
                NOS DOMAINES D'ACTION
            </h1>
        </div>
        <div class="carousel-inner historique-img-container-parent">
            <div class="carousel-item active historique-img-container">

            </div>
        </div>
    </div>

    <section class="mt-5">
        <div class="container-fluid">
            <div class="container">
                <p class="text-center text-intervention">
                    Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non
                    nisi. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec sollicitudin
                    molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                    Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet .

                </p>
                <h3 class="text-center rosette-text-green font-bold py-2">Nos intervenons et accompagnons dans plusieurs
                    domaines</h3>
            </div>
            <div class="container mt-5">
                <div class="accordion " id="accordionFlushExample">


                    @if(sizeof($domaines)>0)
                    @foreach ($domaines as $domaine)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse"
                                data-bs-target="{{ '#flush-collapseSeven'.$domaine->id }}" aria-expanded="false"
                                aria-controls="flush-collapseSeven">
                                {{ $domaine->nom }}
                            </button>
                        </h2>
                        <div id="{{ 'flush-collapseSeven'.$domaine->id }}" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree">
                            <div class="accordion-body">
                                {!! $domaine->description !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif


                </div>
            </div>
        </div>
    </section>

    <div id="carouselExampleIndicators" class="carousel slide container-fluid p-0 m-0 position-relative mt-5"
    data-bs-ride="carousel">
    <div class=" historique-container d-flex justify-content-center align-items-center flex-column">
        <h3 class="text-white ms-5 fw-bold text-center" style="line-height:50px;">
            Voulez-vous faire un geste pour accompagner les actions que nous menons ?
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
