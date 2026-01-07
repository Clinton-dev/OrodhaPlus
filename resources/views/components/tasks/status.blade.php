@props([ 'status'=>'inProgress'])

@php
    $classes = 'p-4 rounded-2xl grid place-items-center h-18 w-18';
    $url = 'resources/images/';

    if($status == 'completed') {
        $classes .= ' bg-primary-500';
        $url .= 'Done_round_duotone.svg';
    }

    if($status == 'inProgress') {
        $classes .= ' bg-accent-orange-500';
        $url .= 'Time_atack_duotone.svg';
    }

    if($status == 'wontDo') {
        $classes .= ' bg-danger-500';
        $url .= 'close_ring_duotone.svg';
    }

    if($status == 'create') {
        $classes .= ' bg-accent-orange-500';
        $url .= 'Add_round_duotone.svg';
    }

@endphp

<div>
    <div class="{{$classes}}">
        <img src="{{ Vite::asset($url)}} " alt="task status icon" class="w-10">
    </div>
</div>
