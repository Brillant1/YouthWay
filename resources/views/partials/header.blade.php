<header class="" style="">
    <div class="fw-bold text-white row bg-dark" id="flash">
        <div class="rosette-bg-green col-1 py-2 d-flex justify-content-center align-items-center text-uppercase fs-5">
            Flash Info</div>
        <div class="bg-dark col-11 py-2  fs-5 d-flex justify-content-center align-items-center text-uppercase">
            <marquee behavior="" direction="">
                Ceci est un communiqué assez important
            </marquee>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light shadow p-0 ">

            <a class="navbar-brand ms-5 my-0" href="#">
                <img class="logo-abbr" src="{{ asset('images/youth2.png') }}" alt="" style="width:220px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex justify-content-between align-items-center w-75">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('historique') }}">Historique</a>
                    </li>

                    <li class="nav-item dropdown dropdown-etablissement li-web-only">
                        <a class="nav-link dropdown-toggle  py-4"
                            href="{{ route('activites') }}" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="true">
                            Activités
                        </a>
                        <ul class="dropdown-menu p-0 rounded-0 dropdown-link-etablissement"
                            aria-labelledby="navbarScrollingDropdown">
                            <li class="nav-li-rose"><a class="dropdown-item p-3"
                                    href="{{ route('activites') }}">Nos activités</a></li>
                            <li class="nav-li-rose"><a class="dropdown-item p-3"
                                    href="{{ route('activite-domaine') }}">Domaines d'intervention</a></li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('actualite') }}">Actualités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item rosette-bg-green px-3">
                        <a href="" class="nav-link text-white fw-bold contaire-partenaire fs-6">
                            Devenir partenaire &nbsp; <i>
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
</header>
