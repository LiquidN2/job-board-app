<div>
    <x-slot:heading>Job Details</x-slot:heading>
    <div>
        <h4 class="mt-6 font-semibold text-2xl">{{ $job->title }}</h4>
        <h6 class="mt-0.5 text-xl text-sky-600">{{ $job->employer->name }}</h6>
        <p class="mt-2">💵 ${{ \Illuminate\Support\Number::format($job->salary) }} per year</p>
        <h6 class="mt-8 text-xl">About This Job</h6>
        <p class="mt-1">{{ $job->description }}</p>
    </div>
</div>
