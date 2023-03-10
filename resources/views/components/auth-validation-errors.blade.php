@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600 text-danger pt-3">
            {{ __('Email ou mot de passe incorrecte') }}
        </div>

        {{-- <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul> --}}
    </div>
@endif
