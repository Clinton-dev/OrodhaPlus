@props(['task' => null, 'status' => null])

@php
    $resolvedStatus = $status ?? $task?->status ?? 'create';
    $classes = 'flex justify-between rounded-3xl p-8 hover:cursor-pointer';

$classes .= match ($resolvedStatus) {
    'create' => ' bg-accent-orange-100',
    'completed' => ' bg-primary-300',
    'inProgress' => ' bg-accent-yellow',
    'wontDo' => ' bg-danger-300',
    default => ' bg-gray-100',
};

@endphp

@if($resolvedStatus === 'create' || ! $task)
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

        @if($task->status !== 'pending')
            <x-tasks.status status="{{ $task->status }}"/>
        @endif

    </div>
@endif
