<div>
    <form id="form-job-save" wire:submit="save">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Job Form</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">
                    Please Provide Details to Create a New Job
                </p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <x-input-label for="employer">Employer ID</x-input-label>
                        <x-input-text
                            type="text"
                            name="employer_id"
                            id="employer_io"
                            placeholder="School Principle"
                            class="mt-2"
                            required
                            wire:model="employer_id"
                        />
                        <x-input-error name="employer_id"/>
                    </div>
                    <div class="sm:col-span-3"></div>
                    <div class="sm:col-span-3">
                        <x-input-label for="title">Title</x-input-label>
                        <x-input-text
                            type="text"
                            name="title"
                            id="title"
                            placeholder="School Principle"
                            class="mt-2"
                            required
                            wire:model="title"
                        />
                        <x-input-error name="title"/>
                    </div>
                    <div class="sm:col-span-3"></div>
                    <div class="sm:col-span-3">
                        <x-input-label for="salary">Salary</x-input-label>
                        <x-input-text
                            type="number"
                            name="salary"
                            id="salary"
                            placeholder="80000"
                            class="mt-2"
                            wire:model="salary"
                        />
                        <x-input-error name="salary"/>
                    </div>
                    <div class="sm:col-span-3"></div>
                    <div class="sm:col-span-3">
                        <x-input-label for="description">Job Description</x-input-label>
                        <x-input-text
                            is_text_area
                            id="description"
                            name="description"
                            rows="3"
                            class="mt-2"
                            wire:model="description"
                        />
                        <x-input-error name="description"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between">
            @if($job)
                <x-button type="button" class="bg-red-600 hover:bg-red-500" wire:click="delete">Delete</x-button>
            @endif
            <div class="flex items-center gap-x-6">
                <a href="/jobs{{ $job ? "/" . $job->id : "" }}" class="text-sm font-semibold leading-6 text-gray-900">Go
                    Back
                </a>
                <x-button type="submit" id="form-job-save">Save</x-button>
            </div>
        </div>
    </form>
</div>
