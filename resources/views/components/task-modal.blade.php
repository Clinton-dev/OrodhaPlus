
<!-- Main modal -->
<div id="task-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-neutral-primary-soft border border-default rounded-base shadow-sm p-4 md:p-6">
            <!-- Modal header -->
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-lg font-medium text-heading">
                    Task Details
                </h3>
                <button type="button" class="border border-gray-100 bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-[0.5rem] text-sm w-9 h-9 ms-auto inline-flex justify-center items-center" data-modal-hide="task-modal">
                    <img src="{{Vite::asset('resources/images/close_ring_duotone-1.svg')}}" alt="" class="h-7 w-7">
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="#" >
                <div class="mb-4">
                    <x-forms.label label="Task name" name="name" />
                    <label for="email" class="block mb-2.5 text-sm font-medium text-heading">Your email</label>
                    <input type="email" id="email" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="example@company.com" required />
                </div>

                <button type="submit" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none w-full mb-3">Login to your account</button>
                <div class="text-sm font-medium text-body">Not registered? <a href="#" class="text-fg-brand hover:underline">Create account</a></div>
            </form>
        </div>
    </div>
</div>
