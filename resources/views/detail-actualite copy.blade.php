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




                


            </div>
    </section>

    {{-- <script amount=5000 email="" position="center" theme="#032497F5" phone="97000000" firstname="" lastname=""
        sandbox="true" callback=" " key="0b7354b0ed5a11ec848227abfc492dc7" src="https://cdn.kkiapay.me/k.js"></script> --}}
@endsection
