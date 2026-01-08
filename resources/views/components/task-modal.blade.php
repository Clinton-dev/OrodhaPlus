@php
    $icons = [
        'study' => '👨‍💻',
        'message' => '💬',
        'tea' => '☕',
        'workout' => '🏋️',
        'study' => '📚',
        'clock' => '⏰',
  ];

    $statuses = [
        'inProgress' => 'In Progress',
        'wontDo' => "Won't do",
        'completed' => 'Completed',
        ];
@endphp

<div id="task-modal" data-modal-placement="top-right" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2/4 max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white border border-default rounded-base shadow-sm p-4 md:p-6">
            <!-- Modal header -->
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-[1.25rem] font-semibold text-black">
                    Task Details
                </h3>
                <button type="button"
                        class="border border-gray-100 bg-transparent hover:bg-neutral-tertiary hover:text-gray-400 rounded-[0.5rem] text-sm w-9 h-9 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="task-modal">
                    <img src="{{Vite::asset('resources/images/close_ring_duotone-1.svg')}}" alt="" class="h-7 w-7">
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="#">
                <div class="mb-8">
                    <label for="email" class="block mb-2.5 text-xs font-medium text-gray-400">Task name</label>
                    <input type="email" id="email"
                           class="bg-neutral-secondary-medium border border-default-medium text-black text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-gray-400"
                           placeholder="example@company.com" required/>
                </div>

                <div class="mb-8">
                    <label for="description" class="block mb-2.5 text-xs font-medium text-gray-400">Description</label>
                    <textarea id="description" rows="4"
                              class="block bg-neutral-secondary-medium border border-default-medium text-black-20 text-sm rounded-base focus:ring-brand focus:border-brand w-full p-3.5 shadow-xs placeholder:text-gray-400"
                              placeholder="Enter short description"></textarea>
                </div>

                <div class="mb-8">
                    <p class="block mb-3 text-xs font-medium text-gray-400">Icon</p>
                    <ul class="flex gap-4">
                        @foreach($icons as $key => $icon)

                            <li>
                                <input
                                    type="radio"
                                    id="icon-{{ $key }}"
                                    name="icon"
                                    value="icon-{{ $key }}"
                                    class="hidden peer"
                                    required/>
                                <label for="icon-{{ $key }}"
                                       class="
                                   inline-flex items-center p-5 text-body rounded-base cursor-pointer

                                   bg-gray-100 border border-default
                                   hover:bg-neutral-secondary-medium

                                   peer-checked:hover:bg-accent-yellow
                                   peer-checked:border-accent-yellow
                                   peer-checked:bg-accent-yellow
                                   ">
                                    <div
                                        class="flex items-center justify-center w-6 h-6 rounded text-2xl">
                                        {{$icon}}
                                    </div>
                                </label>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="mb-20">
                    <p class="block mb-3 text-xs font-medium text-gray-400">Status</p>
                    <ul class="grid grid-cols-2 gap-6">
                        @foreach($statuses as $key => $status)
                            <li>
                                <input
                                    type="radio"
                                    id="status-{{ $key }}"
                                    name="status"
                                    value="status-{{ $key }}"
                                    class="peer hidden"
                                    required
                                />

                                <label
                                    for="status-{{ $key }}"
                                    class="
                                      flex items-center justify-between gap-3 p-2 w-full cursor-pointer
                                      border-2 border-gray-100 rounded-lg
                                      hover:border-info-500
                                      peer-checked:border-info-500
                                    "
                                >
                                    <div class="flex gap-3 items-center">
                                        <x-tasks.status :status="$key"/>
                                        <p class="text-black text-xs">{{ $status }}</p>
                                    </div>

                                    <span
                                        class="
                                            shrink-0 inline-flex h-6 w-6 items-center justify-center rounded-full
                                            bg-info-500 text-white
                                            opacity-0 scale-90 transition
                                            peer-checked:opacity-100 peer-checked:scale-100
{{--                                            TODO: Find out why this isnt displaying when checked/selected --}}
                                          "
                                        aria-hidden="true"
                                    >
                                      <svg viewBox="0 0 20 20" fill="none" class="h-4 w-4">
                                        <path
                                            d="M16.667 5.833L7.5 15l-4.167-4.167"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                      </svg>
                                    </span>
                                </label>
                            </li>
                        @endforeach
                    </ul>

                </div>

                <div class="flex justify-end gap-4">
                    <button
                        class="min-w-24 text-white font-medium text-sm flex justify-center gap-2 bg-gray-400 hover:bg-gray-400/70 px-4 py-2 rounded-full hover:cursor-pointer">
                        Delete
                        <img src="{{Vite::asset('resources/images/Trash.svg')}}" alt="">
                    </button>

                    <button
                        class="min-w-24 text-white font-medium text-sm flex justify-center gap-2 bg-info-500 hover:bg-info-500/70 px-4 py-2 rounded-full hover:cursor-pointer"
                        type="submit">
                        Save
                        <img src="{{Vite::asset('resources/images/Done_round.svg')}}" alt="">
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
