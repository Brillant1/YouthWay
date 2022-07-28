<footer class="shadow pt-5  section-footer" style="margin-top: 100px;">
    <style>
        .plan-site>p>a {
            text-decoration: none;
            color: white;
        }

        a {
            text-decoration: none;
        }
        .section-footer {
    background: #2f2f2f;
}
    </style>
    <div class="container-fluid mt-4 d-flex justify-content-center"  >
        <div class="row  " style="width:90%;">
            <div class="col-md-4 col-sm-6 col-lg-3   d-flex flex-column align-items-center">
                <a class="bg-white p-2" href=" {{ route('accueil') }} "><img src="{{ asset('images/youth2.png') }}" alt="logo DEC"
                        width="250px"></a>
                <h5 class="mt-3 font-bold text-white">
                    YOUTH WAY ORGANISATION

                </h5>
                {{-- <p class="text-spacifique-color">Organisation à but non lucratif </p> --}}
            </div>
            <div class="col-md-4 col-sm-6 col-lg-3 d-flex  align-items-center flex-column ">
                <h5 class="text-white mb-4">PLAN DU SITE</h5>
                <div class="plan-site ">
                    <p>
                        <a href="" class="text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                            Accueil
                        </a>
                    </p>
                    <p>
                        <a href="" class="text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                            Historique
                        </a>
                    </p>
                    <p>
                        <a href="" class="text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                            Activités
                        </a>
                    </p>
                    <p>
                        <a href="" class="text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                            Actualités
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 col-xl-3 mx-auto mb-4  d-flex  align-items-start flex-column flex-column">
                <h5 class="text-white">Suivez-nous sur nos pages</h5>
                <div class="d-flex justify-content-between align-items-center" style="width: 60%;">
                    <a href="" class="mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                    </a>
                    <a href="" class="mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="green"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                    </a>
                    <a href="" class="mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white"
                            class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                        </svg>
                    </a>
                    <a href="" class="mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red"
                            class="bi bi-youtube" viewBox="0 0 16 16">
                            <path
                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="col-md-5 col-lg-4 col-xl-3 mx-auto mb-4  d-flex  flex-column">
                <h5 class="text-start text-white">Abonnez-vous à la newsletter</h5>
                <div>
                    <style>
                        .form-control:focus {
                            box-shadow: none;
                        }
                    </style>
                    <form action="" id="searchForm">
                        <div class="">
                            <input type="mail" id="email" class=" border border-1 form-control" name="email"
                                required placeholder="Entrez votre adresse email ici ..." style="width: 90%;">
                            <button type="submit"
                                class=" btn btn-success border-0 px-4 py-2 mb-5 mt- text-white fw-bold rounded mt-3">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <div class="d-flex justify-content-center text-center text-white footer-bottom pt-3 bg-dark">
        <p class="">&copy Copyright 2015 - {{ date('Y') }} YOUTHWAY. </p>
        <p class="px-2 footer-pipe-web">| </p>
        <p> Tous droits réservés</p>
        <p class="px-3 footer-pipe-web"> | </p>
        <p> ORG. INTERNATIONALE</a>
    </div>
</footer>
