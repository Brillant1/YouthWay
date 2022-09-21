<header class="" style="">
    <div class="fw-bold text-white row bg-dark row " id="flash">
        <div class="rosette-bg-green col-2 py-2 d-flex justify-content-center align-items-center text-uppercase fs-5">
            Flash Info</div>
        <div class="bg-dark col-10 py-2  fs-5 d-flex justify-content-center align-items-center text-uppercase">
            <marquee behavior="" direction="">
                Ceci est un communiqué assez important
            </marquee>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light shadow" id="navbar">
        <a class="navbar-brand ms-lg-5 ms-md-4 ms-2 my-0" href="{{ route('accueil') }}">
            <img class="logo-abbr" src="{{ asset('images/youth2.png') }}" alt="">
        </a>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}


        {{-- Offcanvas for mobile screen --}}
        <button class="border-0 me-lg-5 me-md-4 me-3 mobile-toggle mobile-toggle-square"type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <i>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ff8000"
                    class="bi bi-grid-3x3-gap-fill" viewBox="0 0 16 16">
                    <path
                        d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2z" />
                </svg>
            </i>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel"> </h5>
                <button type="button" class=" border-none border-0 btn-x text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close">

                    <i class="btn-x ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#ff8000"
                            class="bi bi-x" viewBox="0 0 16 16">
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </i>

                </button>
            </div>
            <div class="offcanvas-body ms-0">
                <ul class="ps-0 ms-0">
                    <li><a href="{{ route('accueil') }}">Accueil</a></li>
                    <li><a href="{{ route('historique') }}">Historique</a></li>


                    <li class="">
                        <a href="#">Activités</a>
                        <ul class="d-flex flex-column my-3">
                            <a href="{{ route('activite') }}" class="mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ff8000"
                                    class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                                Nos activités</a>
                            <a href="{{ route('domaine') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ff8000"
                                    class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                                Domaines d'interventions</a>
                        </ul>


                    </li>

                    {{-- <li><a href="#">DEC

                            <div class="d-flex flex-column ms-2 my-3">
                                <a href="{{ route('mot-dec') }}" class="mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ff8000"
                                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    Mot du DEC</a>
                                <a href="{{ route('service-dec') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ff8000"
                                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    Service de la DEC</a>
                            </div>


                        </a>

                    </li> --}}
                    <li><a href="{{ route('actualite') }}">Actualités</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('contact') }}">Nos formations</a></li>

                </ul>
            </div>
        </div>
        {{--End Offcanvas for mobile screen --}}

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex justify-content-between align-items-center w-100">
                <div class="d-flex justify-content-between align-items-center ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('accueil') ? 'active' : ' ' }} " aria-current="page"
                            href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('historique') ? 'active' : ' ' }}"
                            href="{{ route('historique') }}">Historique</a>
                    </li>


                    <li class="nav-item dropdown dropdown-etablissement li-web-only">
                        <a class="nav-link dropdown-toggle  py-4 {{ Route::is(['activite','domaine']) ? 'active' : ' ' }}"
                            href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="true">
                            Activités
                        </a>
                        <ul class="dropdown-menu p-0 rounded-0 dropdown-link-etablissement"
                            aria-labelledby="navbarScrollingDropdown">
                            <li class="nav-li-rose"><a class="dropdown-item p-3"
                                    href="{{ route('activite') }}">Nos
                                    activités</a></li>
                            <li class="nav-li-rose"><a class="dropdown-item p-3"
                                    href="{{ route('domaine') }}">Domaines
                                    d'intervention</a></li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('actualite') ? 'active' : ' ' }}"
                            href="{{ route('actualite') }}">Actualités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Route::is('contact') ? 'active' : ' ' }}"
                            href="{{ route('contact') }}">Contact</a>
                    </li>
                </div>
                <li class="nav-item rosette-bg-green li-devenir-partenaire">
                    <a href="" class="nav-link text-white fw-bold contaire-partenaire fs-6">
                        Nos Formations &nbsp; <i class="i-only-web">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                class="bi bi-arrow-right fw-bold" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </i>
                    </a>
                </li>
            </ul>
        </div>

    </nav>

    <script>
        window.addEventListener('scroll', myFunction);
        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {

            if (window.pageYOffset >= sticky) {
                navbar.classList.add("fixed-top")
                navbar.classList.add("shadow")
                navbar.classList.add("bg-white")
            } else {
                navbar.classList.remove("fixed-top");
            }
        }
    </script>
</header>
