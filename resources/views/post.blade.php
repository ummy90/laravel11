<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

<article class="py-8 max-w-screen-md ">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post ['title'] }}</h2>
    <div class="text-gray-500 text-base">
        <a href="#">{{ $post ['author'] }}</a> | {{ $post -> created_at -> format('d F, Y') }}
    </div>
    <p class="my-4 font-light align-justify">{{ $post ['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts </a>
</article>



</x-layout>