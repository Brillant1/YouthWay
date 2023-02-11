@extends('partials.template')
@section('content')

<style>
    .article-section-card> div:first-child{

    }
    .article-section-card> div:first-child img{
        height: 60%;
        object-fit: cover;
    }
</style>
    <div id="carouselExampleIndicators" class="carousel slide container-fluid p-0 m-0   position-relative"
        data-bs-ride="carousel">
        <div class=" actualite-container d-flex justify-content-center flex-column">
            <h1 class="text-white ms-5 fw-bold text-center" style="line-height:50px;">
                NOS ACTUALITÉS
            </h1>
        </div>
        <div class="carousel-inner actualite-img-container-parent">
            <div class="carousel-item active actualite-img-container">

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
                <h3 class="text-center rosette-text-green font-bold py-2 pt-5">
                    Nous avons plusieurs projets en cours dans divers domaines
                </h3>
            </div>

        </div>
    </section>

        <div class="container-fluid d-flex justify-content-center align-items-center mt-5">
            <div class="row d-flex justify-content-between" style="width: 90%;">
                @if (sizeof($actualites)>0)
                @foreach ($actualites as $actualite)


                        <div class=" card mb-3 pt-3 article-section-card ">
                            <div class="article-section-card-content" id="article-section-card-content">
                                <div class="" style="height: 250px;">
                                    <img src="{{ asset('storage/'.$actualite->photo) }}" class="img-fluid rounded-start w-100 h-100 pb-3" alt="..." >
                                </div>
                                <div class="">
                                    <div class="card-body">
                                        <h5 class="card-title font-bold text-justify actualite-title">{{ $actualite->titre }}</h5>
                                        <h5 class="card-text py-3 mt-3 text-uppercase actualite-card-text" style="border-top: 1px solid black;"> <span class="font-bold text-uppercase">COÛT</span>: {{ $actualite->cout }}</h5>
                                        <div class="d-flex justify-content-between align-items-center mt-3 ">
                                            <p class="py-2 text-lowercase px-3 @if($actualite->statut=="en cours") bg-warning @elseif($actualite->statut=="nouveau") bg-favorite-color @endif rounded-pill text-white fw-bold">{{ $actualite->statut }}</p>
                                            <a href="{{ route('actualite-detail', $actualite->id) }}" class=" rosette-text-orange lire-article-link">Lire l'article
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
                @endif
            </div>
        </div>

        <section >
            <div class="container-fluid mt-5 mb-5 d-flex justify-content-center">
                <div class="container shadow py-5 rounded  d-flex justify-content-center align-items-center flex-column soutien-actualite-content">
                    <h2 class="text-center"><span>Nous avons besoin de votre soutien pour impacter plus.</span></h2>
                    <p class="px-2  mt-3 mb-2 inscrire-reinscrire-content text-inscription text-center " style="font-size: 1.2rem; width:80%;">"Le bien que l'on fait, le ciel le rend. Le bien que l'on garde, la terre le prend. On ne donne jamais
                        rien sans l'avoir reçu et tout ce qui n'est pas donné est perdu" Pape Jean-Paul II</p>
                        <div class="d-flex justify-content-center w-75 mt-4 fs-6" >
                            <a href="#"  class="rounded fw-bold bg-success text-white px-4 py-3 me-3 text-center kkiapay-button pay-btn" >Nous soutenir</a>
                        </div>
                </div>
            </div>
        </section>

        {{-- <script amount=5000 email="" position="center" theme="#032497F5" phone="97000000"
        firstname="" lastname="" sandbox="true" callback=" "
        key="0b7354b0ed5a11ec848227abfc492dc7" src="https://cdn.kkiapay.me/k.js">
        </script> --}}

    <script>
        $(document).ready(function() {

            if($(window).width()<992){
                $('.soutien-actualite-content').removeClass('container');
                $('.soutien-actualite-content').width('90%');
            }
        });
    </script>
@endsection
