@extends('partials.template')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide container-fluid p-0 m-0   position-relative" data-bs-ride="carousel">

    <div class=" contact-container d-flex justify-content-center flex-column">
        <h1 class="text-white ms-5 fw-bold text-center" style="line-height:50px;">
            CONTACT
        </h1>

    </div>
    <div class="carousel-inner contact-img-container-parent">
        <div class="carousel-item active contact-img-container">

        </div>
    </div>
</div>

    <div class="container-fluid mt-5 ">
        <p class="text-center fs-lg-5 fs-md-6 text-success  mt-3 ">Voulez-vous être partenaire / sponsor / membre ou avez-vous des préoccupations, des suggestions ?<br>
        <span>Vous êtes au bon endroit ! </span>
        </p>
        <div class=" mt-5 " id="container-form-contact">


            <form action="{{ route('contact-stroe') }}" method="POST" class="mt-3 form-contact">
                @csrf
                @if (session('messageSend'))
                    <div class="alert alert-success alert-dismissible fade show container mb-5  d-flex align-items-center"  role="alert">
                        <h6> {{ session('messageSend') }} </h6>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="row mt-3">
                    <div class="col-12 col-lg-6 col-sm-12 col-md-6 px-3">
                        <label for="nom">Nom et Prénom(s)<span class="text-danger fw-bold">*</span></label>
                        <input type="text" id="nom" class="  form-control px-3" name="nom"
                            required>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-12 col-md-6 px-3">
                        <label for="email">Adresse mail<span class="text-danger fw-bold">*</span></label>
                        <input type="mail" id="email" class="  form-control" name="email" required>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-lg-6 col-sm-12 col-md-6 px-3">
                        <label for="phone">Téléphone<span class="text-danger fw-bold">*</span></label>
                        <input type="text" id="phone" class="  form-control" name="phone" required>
                        @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                    <div class="col-12 col-lg-6 col-sm-12 col-md-6 px-3">
                        <label for="objet">Objet de votre message<span class="text-danger fw-bold">*</span></label>
                        <select name="objet" id="objet" class="form-control form-select" required>
                            <option value="Partenariat">Partenariat</option>
                            <option value="Sponsorat">Sponsorat</option>
                            <option value="Renseignement">Renseignemet</option>
                            <option value="Autres">Autres</option>
                        </select>
                        {{-- <input type="text" id="objet" class=" border border-1 form-control" name="objet" required> --}}
                        @if ($errors->has('objet'))
                            <span class="text-danger">{{ $errors->first('objet') }}</span>
                        @endif
                    </div>

                </div>
                <div class="row mt-4 mb-3">
                    <div class="col-12">
                        <label for="message">Votre message<span class="text-danger fw-bold">*</span></label>
                        <textarea name="message" id="message" cols="30" rows="10" class=" form-control"
                            name="message" required></textarea>
                        @if ($errors->has('message'))
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        @endif
                    </div>
                </div>

                <button type="submit"
                    class=" btn btn-success border-0 px-4 py-2 mb-5 mt- text-white fw-bold rounded">Envoyer</button>
            </form>
        </div>
        <div class="container-fluid localisation mb-5 mt-4">
            <div class=" row d-flex justify-content-center align-items-center">
                <div class="localisation-dec col-lg-6 col-md-12  ps-5 py-md-5 py-5 " >
                    <div class="row">
                        <p class="col col-1 d-flex justify-content-center align-items-center bg-success icon-reseau"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white"
                                class="bi bi-geo-alt-fill " viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                        </p>
                        <div class="col d-flex justify-content-center  flex-column" style="line-height:15px;">
                            <p class="fw-bold fs-6" style="line-height: 30px;">Rue du minitre Bénoît DEGLA, Ouèssè, BOTTI</p>
                            <p>Notre situation géogrphique</p>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <p class="col col-1 d-flex justify-content-center align-items-center bg-success icon-reseau"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-telephone-inbound" viewBox="0 0 16 16">
                                <path d="M15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0zm-12.2 1.182a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                              </svg>
                        </p>
                        <div class="col d-flex justify-content-center  flex-column" style="line-height:15px; ">
                            <p class="fw-bold fs-6">+229 95 37 11 54</p>
                            <p>Des préoccupations urgentes ? Appelez-nous</p>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <p class="col  col-1 d-flex justify-content-center align-items-center bg-success icon-reseau"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                            </svg>
                        </p>
                        <div class="col d-flex justify-content-center  flex-column" style="line-height:15px; ">
                            <p class="fw-bold fs-6">contact@youthway.com</p>
                            <p>Ecrivez-nous !</p>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <p class="col col-1 d-flex justify-content-center align-items-center bg-success icon-reseau" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                              </svg>
                        </p>
                        <div class="col d-flex justify-content-center  flex-column" style="line-height:15px; ">
                            <p class="fw-bold fs-lg-5 fs-6" style="line-height: 30px;">Lundi au Vendredi, de 8h00 à 18h00</p>
                            <p>Nos heures d'ouverture</p>
                        </div>
                    </div>
                </div>
                <div class="map-dec col-lg-6 col-md-12">
                    <img src=" {{ asset('images/contact.jpg') }}" alt="" class="w-100" style="height: 550px;">
                </div>
            </div>
        </div>
    </div>
@endsection
