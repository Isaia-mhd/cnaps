<div class="w-full min-h-screen flex justify-center items-center bg-primary">
    {{-- Success is as dangerous as failure. --}}

    <div class="w-full max-w-md mx-auto bg-secondary rounded-2xl shadow-lg p-8">
        <div class="w-20 mx-auto h-20 rounded-full mb-6">
            <img src="{{ asset('assets/logo.webp') }}" alt="logo" class="w-full h-full rounded-full">
        </div>

        {{-- Session Status --}}
        @include("components.success")
        @include("components.error")

        {{-- Login Form --}}
        <div  class="space-y-5">

            {{-- Email --}}
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" wire:model="email" id="email" placeholder="johndoe@cnaps.com" wire:keydown.enter='authenticate'
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600 text-sm">
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div class="relative">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                @if ($eye)
                    <i class="fa-solid fa-eye text-black absolute right-4 bottom-3 cursor-pointer" wire:click='viewPass'></i>
                @else
                    <i class="fa-solid fa-eye-slash text-black absolute right-4 bottom-3 cursor-pointer" wire:click='viewPass'></i>
                @endif

                <input type="{{ $eye ? 'password': 'text' }}" wire:model="password" id="password" wire:keydown.enter='authenticate'
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600 text-sm">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit Button --}}
            <div>
                <button wire:click='authenticate'
                    class="w-full bg-blue-900 hover:bg-blue-950 cursor-pointer text-white py-2 rounded-lg font-semibold transition">
                    Se connecter
                </button>
            </div>
        </div>
    </div>
</div>
