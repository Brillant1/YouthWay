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



    <div class="container shadow py-5  mt-5 rounded  d-flex justify-content-center align-items-center flex-column soutien-actualite-content">
        <h2 class="text-center"><span>Nous avons besoin de votre soutien pour impacter plus.</span></h2>
        <p class="px-2  mt-3 mb-2 inscrire-reinscrire-content text-inscription text-center " style="font-size: 1.2rem; width:80%;">"Le bien que l'on fait, le ciel le rend. Le bien que l'on garde, la terre le prend. On ne donne jamais
            rien sans l'avoir reçu et tout ce qui n'est pas donné est perdu" Pape Jean-Paul II</p>
            <div class="d-flex justify-content-center w-75 mt-4 fs-6" >
                <a href="#" class="rounded fw-bold bg-success text-white px-4 py-3 me-3 text-center pay-btn" >Nous soutenir</a>
            </div>

    </div>



@endsection
