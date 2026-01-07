@props(['title' => 'Add New Task', 'desc'=> null])

<div class="space-y-2 mt-2">
    <h4 class="font-semibold text-[1.25rem]">{{ $title }}</h4>
    @if($desc)
        <p class="text-base font-light max-w-sm">{{ $desc }}</p>
    @endif
</div>
