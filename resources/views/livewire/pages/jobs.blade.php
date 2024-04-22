<div>
    <x-slot:heading>Jobs</x-slot:heading>
    {{-- Success is as dangerous as failure. --}}
    <div>
        @foreach($jobs as $job)
            <livewire:components.job-card
                :key="$job->id"
                :id="$job->id"
                :title="$job->title"
                :employer="$job->employer->name"
                :salary="$job->salary"
                :description="$job->description"
            />
        @endforeach
    </div>
    <div class="row d-flex justify-content-md-center mt-4">
        {{ $jobs->links() }}
    </div>
</div>
