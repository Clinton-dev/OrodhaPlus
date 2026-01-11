@props(['title', 'description'])

<div class="flex items-start gap-4 mb-10 mt-8">
    <x-logo />
    <x-title :$title :$description />
</div>

