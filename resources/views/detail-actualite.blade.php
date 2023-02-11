@extends('partials.template')
@section('content')
    <style>

    </style>


    <section>
        <div>
            <div class="mt-5 d-flex flex-column justify-content-center align-items-center">
                <p class="text-center h2 rosette-text-orange fw-bold text-uppercase mb-3 ">A propos de l'actualité</p>

                <div class=" mb-3 url-back">
                    <a href="{{ URL::previous() }}" style="cursor: pointer;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ff8000" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                        </svg>
                    </a>
                </div>


                @if(!is_null($actualite))
                @php
                    if((App\Models\Domaine::where('id', $actualite->domaine_id))->exists()){
                        $domaine = App\Models\Domaine::where('id', $actualite->domaine_id)->first();
                    }

                @endphp
                <div class="shadow detail-activite-content p-4">
                    <div class="">
                        <img src="{{ asset('storage/'.$actualite->photo) }}" alt="" class="w-100" style="height: 450px; width:100%; " >
                        @php
                            $date_debut = strtotime($actualite->date_debut );
                            $date_debut = date('m-d-Y', $date_debut);
                            $date_fin = strtotime($actualite->date_fin);
                            $date_fin = date('m-d-Y', $date_fin);

                        @endphp
                        <div class="d-flex flex-column mt-5">
                            <h3 class="rosette-text-green">{{ $actualite->titre }}</h3>
                            <div class="d-flex justify-content-between mt-3">
                                <p class=" fw-bold h5">Coût lié au projet: <span class=" rosette-text-orange">{{ $actualite->cout }}</span> </p>
                                <p> <span class=" rosette-text-orange"> <span class=" text-dark">Domaine d'action:</span> {{ $domaine->nom }}</span></p>
                            </div>
                            <div class=" d-flex justify-content-between ">
                                <p>À exécuter  du: <span class="fw-bold">{{ $date_debut }} au {{ $date_fin }}</span> </p>
                                <p>Publié le: <span class=" fw-bold">{{ $actualite->created_at->format('Y-m-d') }}  à {{ $actualite->created_at->format('H:i')  }}</span></p>
                            </div>

                        </div>
                    </div>
                    <hr>
                    <div>
                        <p>{!! $actualite->description !!}</p>

                    </div>
                    <div class="d-flex justify-content-center align-items-center action-button">
                        <a href="{{ route('create-don') }}" class="btn btn-primary px-5 rounded-pill me-3">Nous soutenir</a>
                        <a href="{{ route('contact') }}" class="btn rosette-bg-orange px-5 rounded-pill text-white ms-3">Nous contacter</a>
                    </div>
                </div>
                @endif
            </div>
        </div>

    </section>

    <script>
        if (window.matchMedia('(max-width: 600px)').matches){
           $('.action-button').addClass('flex-column');
           $('.action-button').children('a:first-child').removeClass('me-3');
           $('.action-button').children('a:first-child').addClass('my-3');
           $('.action-button').children('a:last-child').removeClass('ms-3');

        }
   </script>

    {{-- <script amount=5000 email="" position="center" theme="#032497F5" phone="97000000" firstname="" lastname=""
        sandbox="true" callback=" " key="0b7354b0ed5a11ec848227abfc492dc7" src="https://cdn.kkiapay.me/k.js"></script> --}}
@endsection
