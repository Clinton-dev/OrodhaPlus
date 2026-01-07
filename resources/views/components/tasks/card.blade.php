@props(['task'=> null, 'status'=>'default'])

@php
    $classes = 'flex justify-between rounded-3xl p-8';

    if($status == 'default') {
        $classes .= ' bg-gray-100';
    }

    if($status == 'create') {
        $classes .= ' bg-accent-orange-100';
    }

    if($status == 'completed') {
        $classes .= ' bg-primary-300';
    }

    if($status == 'inProgress') {
        $classes .= ' bg-accent-yellow';
    }

    if($status == 'wontDo') {
        $classes .= ' bg-danger-300';
    }

@endphp

@if($status == 'create')
    <div class="{{$classes}}" data-modal-target="task-modal" data-modal-toggle="task-modal">
        <div class="flex items-start gap-6">
            <x-tasks.status status="create"/>
            <x-tasks.details />
        </div>

    </div>
@else

    <div class="{{$classes}}" data-modal-target="task-modal" data-modal-toggle="task-modal">
        <div class="flex items-start gap-6">
            <x-tasks.icon />
            <x-tasks.details />
        </div>

        <x-tasks.status />
    </div>
@endif

