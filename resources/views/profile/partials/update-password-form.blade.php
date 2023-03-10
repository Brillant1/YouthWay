<section>
    <div class="container">
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Modification de mot de passe') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Veillez à ce que votre compte utilise un mot de passe long et aléatoire pour rester sécurisé.') }}
            </p>
        </header>

        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')

            <div>
                <x-input-label for="current_password" :value="__('Ancien mot de passe')" />
                <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full form-control" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="password" :value="__('Nouveau mot de passe')" />
                <x-text-input id="password" name="password" type="password" class="mt-1 block w-full form-control" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />
                <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full form-control" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center text-white mt-3 gap-4" >
                <x-primary-button style="background: #178B01;" class="rounded">{{ __('Enrégister') }}</x-primary-button>

                @if (session('status') === 'password-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600"
                    >{{ __('Mot de passe modifié.') }}</p>
                @endif
            </div>
        </form>
    </div>
</section>
