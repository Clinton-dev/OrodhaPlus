<x-layout title="{{$board->name}}" description="{{ $board->description }}">
    <section class="flex flex-col space-y-8 mb-16">
        @foreach($tasks as $task)
            <x-tasks.card :$task status="{{$task->status}}" />
        @endforeach
       <x-tasks.card status="create"  />
    </section>
    <x-task-modal />
</x-layout>

