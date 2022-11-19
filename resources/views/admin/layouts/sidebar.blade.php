<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class="ai-icon" href="event-management.html" aria-expanded="false">
                    <i class="la la-calendar"></i>
                    <span class="nav-text">Event Management</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="{{ route('activites.index') }}" aria-expanded="false">
                    <i class="la la-user"></i>
                    <span class="nav-text">Activités</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('activites.index') }}">Les activités</a></li>
                    <li><a href="{{ route('activites.create') }}">Ajouter activité</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="{{ route('domaines.index') }}" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Domaines</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('domaines.index') }}">Les domaines</a></li>
                    <li><a href="{{ route('domaines.create') }}">Ajouter domaine</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="{{ route('actualites.index') }}" aria-expanded="false">
                    <i class="la la-graduation-cap"></i>
                    <span class="nav-text">Actualités</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('actualites.index') }}">Les actualités</a></li>
                    <li><a href="{{ route('actualites.create') }}">Ajouter actualité</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="{{ route('flashInfos.index') }}" aria-expanded="false">
                    <i class="la la-book"></i>
                    <span class="nav-text">Flash Info</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('flashInfos.index') }}">Les flash info</a></li>
                    <li><a href="{{ route('flashInfos.create') }}">Ajouter flash info</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="{{ route('medias.index') }}" aria-expanded="false">
                    <i class="la la-building"></i>
                    <span class="nav-text">Médias</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('medias.index') }}">Les médias</a></li>
                    <li><a href="{{ route('medias.create') }}">Ajouter média</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Partenaires</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('partenaires.index') }}">Les partenaires</a></li>
                    <li><a href="{{ route('partenaires.create') }}">Ajouter partenaire</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-gift"></i>
                    <span class="nav-text">Demande adhésion</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="all-holiday.html">Les demandes</a></li>
                    <li><a href="add-holiday.html"> Demandes approuvées</a></li>
                    <li><a href="">Demande non approuvées</a></li>

                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="la la-users"></i>
                <span class="nav-text">Témoignages</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('temoignages.index') }}">Liste</a></li>
                <li><a href="{{ route('temoignages.create') }}">Ajouter</a></li>
            </ul>
        </li>



        </ul>
    </div>
</div>
