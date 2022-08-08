@foreach ($posts as $post)
 <x-guest-layout>
    {{$post->description}}
    <img src="{{ $post->img_url }}">
    {{$post->user->name}}
 </x-guest-layout>
 @endforeach
