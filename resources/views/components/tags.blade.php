@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp
@foreach ($tags as $tag)
<li
    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
>
    <a href="#">{{ $tag }}</a>
</li>
@endforeach
