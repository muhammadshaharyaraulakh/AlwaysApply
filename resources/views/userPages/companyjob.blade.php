<x-navigationbar />

<section class="bg-purple-50 border-b border-purple-100">
    <div class="max-w-7xl mx-auto px-4 md:px-8 py-10">

        <div class="flex flex-col md:flex-row md:items-center gap-6">

            <div class="w-24 h-24 bg-white rounded-xl shadow flex items-center justify-center">
                <img src="{{ asset('images/company/' . $company->logo) }}" class="w-16 h-16 object-contain">
            </div>

            <div class="flex-1">

                <h1 class="text-3xl font-bold text-purple-900">
                    {{ $company->name }}
                </h1>

                <p class="text-gray-500 mt-1">
                    <i class="fa-solid fa-location-dot mr-1"></i>
                    {{ $company->location }}
                </p>

                <p class="text-gray-600 mt-3 max-w-2xl">
                    {{ $company->description }}
                </p>

            </div>

            <!-- Stats -->
            <div class="bg-white border border-gray-100 rounded-lg p-6 text-center shadow-sm">

                <p class="text-sm text-gray-500">Active Jobs</p>

                <p class="text-3xl font-bold text-brand-purple">
                    {{ $jobs->count() }}
                </p>

            </div>

        </div>

    </div>
</section>


<!-- JOB LIST -->
<section class="max-w-7xl mx-auto px-4 md:px-8 py-10">



    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach ($jobs as $job)

        <div class="bg-white p-6 rounded-xl border border-gray-100 hover:shadow-md transition">

            <h3 class="font-bold text-lg text-gray-900">
                {{ $job->title }}
            </h3>

            <div class="flex items-center gap-2 mt-2 mb-4">

                <span class="text-green-600 text-xs font-bold uppercase">
                    {{ $job->job_type }}
                </span>

                <span class="text-gray-400 text-xs">•</span>

                <span class="text-gray-500 text-xs">
                    ${{ $job->minimum_salary }} - ${{ $job->maximum_salary }} / {{ $job->salary_type }}
                </span>

            </div>

            <p class="text-sm text-gray-500 mb-4">
                <i class="fa-solid fa-location-dot mr-1"></i>
                {{ $company->location }}
            </p>

            <div class="flex gap-3">

                <a href="{{ route('job', $job->id) }}"
                   class="flex-1 text-center py-2 border border-gray-300 rounded text-sm hover:border-brand-purple hover:text-brand-purple transition">
                   View Details
                </a>

                <a href="#"
                   class="flex-1 text-center py-2 bg-brand-purple text-white rounded text-sm hover:bg-brand-dark transition">
                   Apply
                </a>

            </div>

        </div>

        @endforeach

    </div>

    <!-- Pagination -->
    <div class="mt-10">
        {{ $jobs->links() }}
    </div>

</section>

<x-footer />