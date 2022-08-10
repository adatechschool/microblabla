

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-blue border-b border-darkblue-900">
                    <form action="{{ route(profile.update) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-row-2 gap-6">
                                <div>
                                    <x-label for="name" :value="__('Name')"></x-label>
                                    <x-input class="block mt-1 w-full" type="text" name="name"
                                                value="{{ auth()->user()->name }}" autofocus></x-input>
                            </div>
                            <div>
                                <x-label for="email" :value="__('Email')"></x-label>
                                <x-input class="block mt-1 w-full" type="email" name="emaail"
                                            value="{{ auth()->user()->email }}"></x-input>
                            </div>
                        </div>

                        <div class="grid grid-rows-2 gap-6">
                            <div>
                                <x-label for="password" :value="__('New password')"></x-label>
                                <x-input class="block mt-1 w-full" type="password" name="password"
                                        autocomplete="new-password"></x-input>
                            </div>
                            <div>
                                <x-label for="password_confirmation" :value="__('Confirm password')"></x-label>
                                <x-input class="block mt-1 w-full" type="password"
                                        name="password_confirmation"></x-input>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-3">
                            Update
                        </x-button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
