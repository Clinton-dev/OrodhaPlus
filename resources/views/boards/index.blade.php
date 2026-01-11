<x-layout title="{{$board->name}}" description="{{ $board->description }}">
    <section class="flex flex-col space-y-8">
       <x-tasks.card />
       <x-tasks.card status="create"  />
    </section>
    <x-task-modal />
</x-layout>

