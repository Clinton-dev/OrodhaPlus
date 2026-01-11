@props(['task'=> null, 'status'=>null])

@php
    $classes = 'flex justify-between rounded-3xl p-8 hover:cursor-pointer';

$classes .= match ($status) {
    $status == 'create' => ' bg-accent-orange-100',
    $status == 'completed' => ' bg-primary-300',
    $status == 'inProgress' => ' bg-accent-yellow',
    $status == 'wontDo' => ' bg-danger-300',
    default => ' bg-gray-100',
};

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

