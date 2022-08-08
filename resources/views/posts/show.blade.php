<x-guest-layout>
  {{$post->user->name}}:
  {{$post->description}}
  <img src="{{ $post->img_url }}">
</x-guest-layout>

