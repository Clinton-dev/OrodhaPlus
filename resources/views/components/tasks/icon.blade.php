@props(['icon'])

@php
    $icons = [
        'coding' => '👨💻',
        'study' => '📚',
        'message' => '💬',
        'tea' => '☕',
        'workout' => '🏋️',
        'clock' => '⏰',
  ];
@endphp

<div class="bg-white rounded-2xl p-6 grid place-items-center text-2xl">
    {{ $icons[$icon] ?? '❓' }}
</div>
