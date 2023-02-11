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

    <div class="container-fluid d-flex justify-content-center mt-5">
        <div style="width: 80%;">
            <div class="row">
                <div class=" col col-lg-6">
                    <form action="#" class="row">
                        <div class="col col-4">
                            <label for="">Du:</label>
                            <input type="date" class="py-1 px-2">
                        </div>
                        <div class="col col-4">
                            <label for="">Au:</label>
                            <input type="date" class="py-1 px-2">
                        </div>
                        <input type="submit" class="col col-2 btn bg-youth-color text-white" value="Afficher">
                    </form>
                </div>
                <div class="col col-lg-6">
                    <div class="row ">
                        <form action="#">
                            <span>Trier par: </span> &nbsp;
                            <select name="" id="" class="px-3 py-1">
                                <option value="">En cours</option>
                                <option value="">A venir</option>
                                <option value="">Passée</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </div>

    <section class=" d-flex justify-content-center">
        <div class="row" style="width: 80%">
            @if (sizeof($actualites) > 0)
                @foreach ($actualites as $actualite)
                    <div class="col-lg-4 col-md-6  col-sm-12  card-container-activity mt-5  ">
                        <a href="{{ route('actualite-detail', $actualite->id) }}" class="text-dark">
                            <div class="card h-100">
                                <div class="card-header">
                                    <img src="{{ asset('storage/' . $actualite->photo) }}" class="card-img-top"
                                        alt="..." style=" height:250px; width:100%; ">
                                </div>
                                <div class="card-body ps-0">
                                    <h5 class="card-title font-weight-bold fs-5 rosette-text-orange">
                                        {{ $actualite->titre }}
                                    </h5>
                                    <p class="card-text mt-3 title-activity-content ">{!! Str::substr($actualite->description, 0, 100) . '...' !!}</p>

                                    <div class="d-flex justify-content-between align-items-center mt-4">
                                        <p class="font-bold"></p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000688" class="bi bi-calendar2-fill" viewBox="0 0 16 16">
                                            <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM2.545 3h10.91c.3 0 .545.224.545.5v1c0 .276-.244.5-.546.5H2.545C2.245 5 2 4.776 2 4.5v-1c0-.276.244-.5.545-.5z"/>
                                        </svg>  &nbsp;


                                       <span class="youth-color">{{ $actualite->created_at->format('d-m-Y') }}</span> </p>
                                        <a href="{{ route('actualite-detail', $actualite->id) }}"
                                            class="youth-colorfont-bold">Voir plus

                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#000688" class="bi bi-arrow-right fw-bold" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <div class=" mt-3 pb-4" style="margin-left: 120px;">
                    <h2>Aucune actualité n'est disponible pour le moment.</h2>
                </div>
            @endif
        </div>


    </section>

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
