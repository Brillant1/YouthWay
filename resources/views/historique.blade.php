@extends('partials.template')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide container-fluid p-0 m-0   position-relative" data-bs-ride="carousel">

    <div class=" historique-container d-flex justify-content-center flex-column">
        <h1 class="text-white ms-5 fw-bold text-center h1-historique mt-2" style="line-height:50px;">
            NOTRE HISTOIRE
        </h1>
    </div>
    <div class="carousel-inner historique-img-container-parent">
        <div class="carousel-item active historique-img-container">

        </div>
    </div>
</div>

<div class="container-fluid mt-0 d-flex justify-content-center align-items-center ">
    <div class=" d-flex justify-content-between align-items-center mt-5 container-mobile" id="promoteur-section">
        <div class="mt-lg-5">

            <div class="img-presentation-container shadow img-fluid">

            </div>
        </div>
        <div class="ms-lg-5 ms-0 mt-5">
            <h1 class="fw-bold mb-3 pb-1 "><span class="titre-presentation-promotteur">Qui est le promoteur de YouthWay ?</span></h1>
            <p class=" text-presentation-promotteur mt-4">Nulla porttitor accumsan tincidunt. Mauris blandit aliquet
                elit, eget
                tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh.
                Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie
                malesuada. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Nulla
                porttitor accumsan
                tincidunt. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
            <a href="#" class="btn bg-youth-color text-white fw-bold rounded-pill p-2 px-4 mt-2 savoir-plus">Savoir plus sur moi</a>
        </div>
    </div>
</div>

<div class="container-fluid d-flex justify-content-center align-items-center flex-column">
    <div class=" container-mobile mt-lg-5 pt-5">
        <h1 class="fw-bold mb-3 pb-1"><span class="naissance-youthway-text">Comment est née YouthWay ?</span></h1>
        <p class="p-historique pt-4">
            Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt
            nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo
            eget malesuada. Cras ultricies ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada.
            Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at
            sem.
        </p>
        <p class="p-historique">
            Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a
            pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
            cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ante
            ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet
            aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor
            sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque,
            auctor sit amet aliquam vel, ullamcorper sit amet ligula. Sed porttitor lectus nibh. Donec sollicitudin
            molestie malesuada.
        </p>
        <p class="p-historique">
            Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas
            non nisi. Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan tincidunt. Donec rutrum
            congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit
            amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla
            porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
        </p>
        <p class="p-historique">
            Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Praesent
            sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla quis lorem ut libero malesuada feugiat.
        </p>
        <p class="p-historique">
            << Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.>> <br>
            <p class="font-bold youth-color fs-4 mt-2">Paterne Mawoussi TCHAGNONSI</p>
        </p>
        <p>

        </p>
    </div>
    <div class=" container-mobile mt-5">
        <h1 class="fw-bold mb-3 pb-1 "><span class="titre-mission">Mission & Vision</span></h1>

        <p class="p-historique">
            Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas
            non nisi. Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan tincidunt. Donec rutrum
            congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit
            amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla
            porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
        </p>
        <p class="p-historique">
            Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Praesent
            sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla quis lorem ut libero malesuada feugiat.
        </p>
    </div>
</div>

{{-- <script>
    $(document).ready(function() {
        if ($(window).width() <= 991) {
            $('#promottuer-section').removeClass('container');
            $('#promottuer-section').addClass('container-fluid');
            $('#promottuer-section').addClass('ms-3');
        }
        else{
            $('#promottuer-section').removeClass('container-fluid');
            $('#promottuer-section').removeClass('ms-3');
            $('#promottuer-section').addClass('container');

        }
    })
</script> --}}
@endsection
