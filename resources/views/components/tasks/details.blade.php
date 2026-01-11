@props(['title' => 'Add New Task', 'description'=> null])

<div class="space-y-2 mt-2">
    <h4 class="font-semibold text-base">{{ $title }}</h4>
    @if($description)
        <p class="text-base font-light max-w-sm">{{ $description }}</p>
    @endif
</div>
