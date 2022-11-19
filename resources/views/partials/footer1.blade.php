<footer class="section-footer pt-5 text-white mt-5 d-flex flex-column justify-content-center align-items-center">

    <div class="row p-4" id="web-footer">
        <div class="col-12 col-md-6 col-lg-4">
            <a class="navbar-brand logo-web text-dark text-uppercase text-white position-relative logo-bbCar font-bold"
                href="#">
                <p></p>
                <p></p>
                Logo
            </a>
            <p class="mt-4 p-abonnement">Abonnez-vous a notre bulletin d’information et soyez les premiers a recevoir nos
                updates
            </p>

            @if (session('addNewsletterMessage'))
                <div class="">
                    <span class="text-dark"> {{ session('addNewsletterMessage') }}</span>
                </div>
            @endif

            <div class="mt-4">
                <form action="" method="POST">
                    @csrf
                    <div class="d-flex justify-content-center align-items-center div-abonnement">
                        <input type="email" name="email" placeholder="Enrez votre addresse email"
                            class="form-control py-2" required>
                        <button type="submit" class=" btn px-3 ms-2 text-white btn-abonne bg-dark ">S'abonner</button>
                    </div>
                </form>
            </div>

            <div class="my-4">
                <div class="media-link">
                    Retrouvez-nous sur:
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFF"
                        class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFF"
                        class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFF"
                        class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Only on web --}}
        <div class="col-12 col-md-6 col-lg-2 plateforme-section" id="web-plateforme">
            <h4 class=" "><span class="border-1 border-bottom">PLAN DU SITE</span></h4>
            <ul class="ps-0 list-unstyled">
                <li class="mt-4"><a href="#accueil" class="text-decoration-none text-white">
                    <a href="{{ route('accueil') }}" class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                        Accueil
                </a></li>
                <li class="mt-2"><a href="#fonctionnalite" class="text-decoration-none text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                            Historique
                </a>
                </li>
                <li class="mt-2"><a href="#offre" class="text-decoration-none text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                            Activités
                </a></li>
                <li class="mt-2"><a href="{{ route('actualite') }}" class="text-decoration-none text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                            Actualités
                </a></li>
                <li class="mt-2"><a href="{{ route('contact') }}" class="text-decoration-none text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                            Contact
                </a></li>
            </ul>
        </div>

        <div class="col-12 col-md-6 col-lg-2  ps-4 " id="web-faq">
            <h4 class=""><span class="border-1 border-bottom">FAQ</span></h4>
            <ul class="ps-0 list-unstyled">
                <li class="mt-4"><a href="" class="text-decoration-none text-white">Comment ça marche?</a></li>
                <li class="mt-2"><a href="" class="text-decoration-none text-white">Comment payer</a></li>
                <li class="mt-2"><a href="" class="text-decoration-none text-white">Remboursement</a></li>
                <li class="mt-2"><a href="" class="text-decoration-none text-white">Comment s'inscrire?</a>
                </li>
                <li class="mt-2"><a href="" class="text-decoration-none text-white">Que faire si...?</a></li>
            </ul>
        </div>



        {{-- Only on mobile --}}
        <div class="col-12 col-md-6 col-lg-2  ps-4 " id="mobile-faq">
            <h4 class=""><span class="border-1 border-bottom">FAQ</span></h4>
            <ul class="ps-0 list-unstyled">
                <li class="mt-4"><a href="" class="text-decoration-none text-white">Comment ça marche?</a></li>
                <li class="mt-2"><a href="" class="text-decoration-none text-white">Comment payer</a></li>
                <li class="mt-2"><a href="" class="text-decoration-none text-white">Remboursement</a></li>
                <li class="mt-2"><a href="" class="text-decoration-none text-white">Comment s'inscrire?</a>
                </li>
                <li class="mt-2"><a href="" class="text-decoration-none text-white">Que faire si...?</a></li>
            </ul>
        </div>

        <div class="col-12 col-md-6 col-lg-2 plateforme-section" id="mobile-plateforme">
            <h4 class=" "><span class="border-1 border-bottom">Plateforme</span></h4>
            <ul class="ps-0 list-unstyled">
                <li class="mt-4"><a href="{{ route('accueil') }}" class="text-decoration-none text-white">Accueil</a></li>
                <li class="mt-2"><a href="#fonctionnalite" class="text-decoration-none text-white">Fonctionnalités</a>
                </li>
                <li class="mt-2"><a href="#offre" class="text-decoration-none text-white">Offres</a></li>
                <li class="mt-2"><a href="#temoignage" class="text-decoration-none text-white">Témoignages</a></li>
                <li class="mt-2"><a href="{{ route('contact') }}" class="text-decoration-none text-white">Contactez-nous</a></li>
            </ul>
        </div>






        <div class="col-12 col-md-6 col-lg-4 info-section">

            <h4 class="ms-4"><span class="border-1 border-bottom">Infos</span></h4>
            <ul class="ps-3 list-unstyled ul-info">
                <li class="mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#E6DBFF"
                        class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg> &nbsp;
                    Ouessè, Quartier Botti
                </li>
                <li class="mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg> &nbsp;
                    (+229) 94 21 22 15 / (+229) 91 39 26 63
                </li>
                <li class="mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path
                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                    </svg> &nbsp;
                    contact@youthway.com
                </li>
            </ul>
        </div>
    </div>






        <div class="text-center text-white footer-bottom pt-3 last-footer-div w-100">
            <p class="">&copy Copyright 2015 - {{ date('Y') }} YOUTHWAY. </p>
            <p class="px-2 footer-pipe-web">| </p>
            <p> Tous droits réservés</p>
            <p class="px-3 footer-pipe-web"> | </p>
            <p> ORG. INTERNATIONALE</a>
        </div>




</footer>