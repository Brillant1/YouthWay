@extends('partials.template')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide container-fluid p-0 m-0   position-relative"
        data-bs-ride="carousel">

        <div class=" historique-container d-flex justify-content-center flex-column">
            <h1 class="text-white ms-5 fw-bold text-center" style="line-height:50px;">
                CONTACT
            </h1>
        </div>
        <div class="carousel-inner historique-img-container-parent">
            <div class="carousel-item active historique-img-container">

            </div>
        </div>
    </div>

    @if (session('messageSend'))
        <div class="alert alert-success container mb-4 mt-5">
            <h6> {{ session('messageSend') }} </h6>
        </div>
    @endif

    <div class="container-fluid mt-5 ">
        <div class="container">
            <form action="{{ route('') }}" method="POST">
                @csrf
                <div class="row mt-3">
                    <div class="col-12 col-lg-6 col-sm-12 col-md-6 px-3">
                        <label for="nom">Nom et Prénom(s)<span class="text-danger fw-bold">*</span></label>
                        <input type="text" id="nom" class=" border border-1 form-control px-3" name="nom"
                            required>

                    </div>
                    <div class="col-12 col-lg-6 col-sm-12 col-md-6 px-3">
                        <label for="email">Adresse mail<span class="text-danger fw-bold">*</span></label>
                        <input type="mail" id="email" class=" border border-1 form-control" name="email" required>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
