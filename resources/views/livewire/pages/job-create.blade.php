<div>
    <x-slot:heading>Create New Job</x-slot:heading>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <form action="/jobs" method="POST" id="form-job-create">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">New Job Form</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">
                    Please Provide Details to Create a New Job
                </p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <livewire:components.input-label for="title" label="Job Title"/>
                        <div class="mt-2">
                            <livewire:components.input-text name="title" id="title"/>
                        </div>
                    </div>
                    <div class="sm:col-span-3"></div>
                    <div class="sm:col-span-3">
                        <livewire:components.input-label for="salary" label="Job Salary"/>
                        <div class="mt-2">
                            <livewire:components.input-text name="salary" id="salary"/>
                        </div>
                    </div>
                    <div class="sm:col-span-3"></div>
                    <div class="sm:col-span-3">
                        <livewire:components.input-label for="description" label="Job Description"/>
                        <div class="mt-2">
                            <livewire:components.input-text name="description" id="description"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Save
            </button>
        </div>

    </form>
</div>
