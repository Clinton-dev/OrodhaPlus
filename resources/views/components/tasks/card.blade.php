@props(['task'=> null, 'status'=>null])

@php
    $classes = 'flex justify-between rounded-3xl p-8';

    switch($status) {
        case $status == 'create':
            $classes .= ' bg-accent-orange-100';
            break;
        case $status == 'completed':
            $classes .= ' bg-primary-300';
            break;
        case $status == 'inProgress':
            $classes .= ' bg-accent-yellow';
            break;
        case $status == 'wontDo':
            $classes .= ' bg-danger-300';
            break;
        default:
            $classes .= ' bg-gray-100';
    }

@endphp

@if($status == 'create')
    <div class="{{$classes}}" data-modal-target="task-modal" data-modal-toggle="task-modal">
        <div class="flex items-start gap-6">
            <x-tasks.status status="create"/>
            <x-tasks.details/>
        </div>

    </div>
@else

    <div class="{{$classes}}" data-modal-target="task-modal" data-modal-toggle="task-modal">
        <div class="flex items-start gap-6">
            <x-tasks.icon icon="{{$task->icon}}"/>
            <x-tasks.details title="{{$task->name}}" description="{{$task->description}}"/>
        </div>

        @if($task->status != 'pending')
            <x-tasks.status status="{{$task->status}}"/>
        @endif

    </div>
@endif

