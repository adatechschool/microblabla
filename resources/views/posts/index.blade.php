<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

@foreach ($posts as $post)
 <x-guest-layout>
    {{$post->description}}
    <img src="{{ $post->img_url }}">
    {{$post->user->name}}
 </x-guest-layout>
 @endforeach

</x-app-layout>
