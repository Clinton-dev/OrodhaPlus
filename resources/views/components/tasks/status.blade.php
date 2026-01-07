@props(['url', 'status'=>'inProgress'])

@php
    $classes = 'p-4 rounded-2xl grid place-items-center h-18 w-18';

    if($status == 'completed') {
        $classes .= ' bg-primary-500';
    }

    if($status == 'inProgress') {
        $classes .= ' bg-accent-orange-500';
    }

    if($status == 'wontDo') {
        $classes .= ' bg-danger-500';
    }

@endphp

<div>
    <div class="{{$classes}}">
        <img src="{{ Vite::asset('resources/images/close_ring_duotone.svg')}} " alt="task status icon" class="w-10">
    </div>
</div>
