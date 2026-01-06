<x-layout>
    <section class="flex flex-col space-y-4">
        <div class="flex justify-between  rounded-xl p-8 bg-primary-300">
            <div class="flex items-center gap-6">
                <div class="bg-white rounded-xl p-6 grid place-items-center">
                    <img src="https://placehold.co/20" alt="task icon">
                </div>
                <div>
                    <h4 class="font-semibold text-[1.25rem]">Task in Progress</h4>
                    <p class="text-base font-light">Work on a challenge on devChallenges.io, learn typescript</p>
                </div>
            </div>
            <div class="bg-primary-500 p-4 rounded-xl grid place-items-center">
                <img src="{{ Vite::asset('resources/images/close_ring_duotone.svg')}} " alt="task status icon" class="w-7">
            </div>
        </div>
    </section>
</x-layout>

