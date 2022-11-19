@extends('partials.template')
@section('content')

    <div>
        <div class="mt-5 d-flex flex-column justify-content-center align-items-center">
            <p class="text-center h2 rosette-text-orange fw-bold text-uppercase mb-3 ">A propos de l'activivté</p>

            <div class=" mb-3" style="width: 70%;">
                <a href="{{ URL::previous() }}" style="cursor: pointer;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ff8000" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>
                </a>
            </div>


            @if(!is_null($activite))
            @php
                if((App\Models\Domaine::where('id', $activite->domaine_id))->exists()){
                    $domaine = App\Models\Domaine::where('id', $activite->domaine_id)->first();
                }
            @endphp
            <div class=" shadow p-4" style="width:70%; border-radius:20px;">
                <div class="">
                    <img src="{{ asset('storage/'.$activite->photo) }}" alt="" class="w-100" style="height: 450px; width:100%; " >

                    <div class="d-flex flex-column mt-5">
                        <h3 class=" rosette-text-green">{{ $activite->titre }}</h3>
                        <p>Exécutée  du: <span class="fw-bold">{{ $activite->date_debut }} au {{ $activite->date_fin }}</span> </p>
                        <p>Domaine: <span class=" rosette-text-orange">{{ $domaine->nom }}</span></p>
                    </div>
                </div>
                <hr>
                <div>
                    <p>{!! $activite->description !!}</p>
                    <p class=" rosette-text-blue">Publié le : {{ $activite->created_at->format('d-m-Y') }}</p>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="#" class="btn btn-primary px-5 rounded-pill me-3">Nous soutenir</a>
                    <a href="{{ route('contact') }}" class="btn rosette-bg-orange px-5 rounded-pill text-white ms-3">Nous contacter</a>
                </div>
            </div>
            @endif
        </div>
    </div>

@endsection

