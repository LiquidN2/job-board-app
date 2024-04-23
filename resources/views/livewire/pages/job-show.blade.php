<div>
    <x-slot:heading>Job Details</x-slot:heading>
    <div class="border-b border-gray-900/10 pb-12">
        <h4 class="mt-6 font-semibold text-2xl">{{ $job->title }}</h4>
        <h6 class="mt-0.5 text-xl text-sky-600">{{ $job->employer->name }}</h6>
        <p class="mt-2">💵 ${{ \Illuminate\Support\Number::format($job->salary) }} per year</p>
        <h6 class="mt-8 text-xl">About This Job</h6>
        <p class="mt-1">{{ $job->description }}</p>
    </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Back to Jobs</a>
        <x-button is_link href="/jobs/{{ $job->id }}/edit">Edit</x-button>
    </div>
</div>
