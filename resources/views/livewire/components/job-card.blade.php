@php
    use Illuminate\Support\Number
@endphp
<a href="/jobs/{{ $id }}"
   class="block w-full border border-gray-200 rounded-lg bg-white mb-4 py-4 px-6 hover:bg-gray-100">
    <h4 class="font-semibold text-lg">{{ $title }}</h4>
    <h6 class="font-semibold text-sky-600">{{ $employer }}</h6>
    <p class="mt-2"><strong>Salary</strong>: ${{ Number::format($salary) }}</p>
    <p class="mt-2">{{ $description }}</p>
</a>
