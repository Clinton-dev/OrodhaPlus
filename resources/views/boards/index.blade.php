<x-layout title="{{$board->name}}" description="{{ $board->description }}">
    <section class="flex flex-col space-y-8 mb-16">
        @foreach($tasks as $task)
            <x-tasks.card :$task status="{{$task->status}}" />
        @endforeach

        <button form="create-task-form" type="submit">
            <x-tasks.card status="create"  />
        </button>

            <form id="create-task-form"  method="POST" action="{{route('tasks.store', $board)}}">
                @csrf
            </form>
    </section>
    <x-task-modal />
</x-layout>

