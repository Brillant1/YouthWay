@extends('partials.template')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide container-fluid p-0 m-0   position-relative" data-bs-ride="carousel">

    <div class=" historique-container d-flex justify-content-center flex-column">
        <h1 class="text-white ms-5 fw-bold text-center" style="line-height:50px;">
            NOTRE MÉDIATHÈQUE
        </h1>

    </div>
    <div class="carousel-inner historique-img-container-parent">
        <div class="carousel-item active historique-img-container">

        </div>
    </div>
</div>


<div class="container-fluid mt-5 ">
    <div class=" container justify-content-center">
        <div class="d-flex justify-content-center">
            <p class=" border border-2 py-1  rounded-pill">
                <span class="bg-success rounded-pill p-2 px-5 cursor-pointer text-white ">Photothèque</span>
                <span class="bg-success rounded-pill p-2 px-5 cursor-pointer text-white ">Vidéothèque</span>
            </p>
        </div>
    </div>

    <div>
        <div class=" row justify-content-end">
            <div class=" d-flex flex-column col-7 main-video">
                <video src="{{ asset('images/Installer VueJS 3 avec Laravel 9.mp4') }}" controls autoplay muted>
                </video>
                <h4 class="title">01. Témoignage 1</h4>
            </div>

            <div class="video-list col-4">
                <div class="vid active ">
                    <video src="{{ asset('images/Installer VueJS 3 avec Laravel 9.mp4') }}"  muted>
                    </video>
                    <h4 class="title ps-2" >01. Témoignage 1</h4>
                </div>
                <div class="vid ">
                    <video src="{{ asset('images/Installer VueJS 3 avec Laravel 9.mp4') }}" muted>
                    </video>
                    <h4 class="title ps-2">02. Témoignage 2</h4>
                </div>
                <div class="vid ">
                    <video src="{{ asset('images/Installer VueJS 3 avec Laravel 9.mp4') }}" muted>
                    </video>
                    <h4 class="title ps-2">03. Témoignage 3</h4>
                </div>
                <div class="vid ">
                    <video src="{{ asset('images/Installer VueJS 3 avec Laravel 9.mp4') }}" muted>
                    </video>
                    <h4 class="title ps-2">04. Témoignage 4</h4>
                </div>
            </div>

        </div>
    </div>
    <script>
        let listVideo = document.querySelectorAll('.listVideo .vid');
        let mainVideo = document.querySelector('.mainVideo');
        let title = document.querySelector('.mainVideo .title');

        listVideo.foreach(function(video) {
            video.onclick(function() {
                listVideo.foreach(function(vid) {
                    
                })
            })
        })
    </script>
@endsection
