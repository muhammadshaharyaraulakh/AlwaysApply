<x-navigationbar />

<main class="bg-gray-50 min-h-screen py-8 pb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


        <div class="mb-6 flex items-center text-sm text-gray-500">
            <a href="{{ route('jobs') }}" class="hover:text-brand-purple transition flex items-center gap-2">
                <i class="fa-solid fa-arrow-left"></i> Back to Jobs
            </a>
            <span class="mx-3">/</span>
            <span class="text-gray-800 font-medium">{{ $job->title }}</span>
        </div>


        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-purple-50 rounded-full mix-blend-multiply filter blur-3xl opacity-50 -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>

            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-5 relative z-10 w-full">

                <div class="w-16 h-16 md:w-20 md:h-20 bg-white border border-gray-100 shadow-sm rounded-xl flex items-center justify-center flex-shrink-0 p-3">
                    <img src="{{ asset('images/company/' . $job->company->logo) }}"
                         alt="{{ $job->company->name }}"
                         class="w-full h-auto object-contain">
                </div>

                <div class="flex-1">
                    <div class="flex flex-wrap items-center gap-3 mb-2">
                        <h1 class="text-2xl md:text-3xl font-bold text-gray-900 leading-tight">{{ $job->title }}</h1>
                        <span class="bg-green-100 text-green-700 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">{{ $job->status }}</span>
                    </div>

                    <div class="flex flex-wrap items-center gap-y-2 gap-x-6 text-sm text-gray-600">
                        <span class="flex items-center gap-1.5 font-medium text-gray-800">
                            <i class="fa-solid fa-building text-brand-purple"></i> {{ $job->company->name }}
                        </span>
                        <span class="flex items-center gap-1.5">
                            <i class="fa-solid fa-location-dot text-gray-400"></i> {{ $job->company->location }}
                        </span>
                        <span class="flex items-center gap-1.5">
                            <i class="fa-regular fa-clock text-gray-400"></i>
                            Posted on {{ $job->created_at->format('F d, Y') }}
                        </span>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-3 w-full md:w-auto relative z-10 shrink-0 mt-4 md:mt-0">
                <form method="post">
                    @csrf
                    <button class="w-12 h-12 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:text-brand-purple hover:border-brand-purple hover:bg-purple-50 transition cursor-pointer">
                        <i class="fa-regular fa-bookmark text-xl"></i>
                    </button>
                </form>
                <a href="#">
                <button class="flex-1 md:w-auto px-8 py-3 bg-brand-purple text-white font-semibold rounded-lg shadow-md hover:bg-brand-dark transition cursor-pointer whitespace-nowrap">
                    Apply Now
                </button>
                </a>
            </div>
        </div>

        <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-8">

            <div class="lg:col-span-2 space-y-8">


                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
                    <h2 class="text-xl font-bold text-gray-900 mb-4 border-b border-gray-100 pb-3">Job Summary</h2>
                    <p class="text-gray-600 leading-relaxed text-sm md:text-base">{{ $job->summary }}</p>
                </div>

                
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
                    <h2 class="text-xl font-bold text-gray-900 mb-4 border-b border-gray-100 pb-3">Key Responsibilities</h2>
                    <ul class="space-y-3">
                        @foreach ($job->responsibilities as $responsibility)
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-brand-purple mt-1 flex-shrink-0"></i>
                                <span class="text-gray-600 text-sm md:text-base">{{ $responsibility }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
                    <h2 class="text-xl font-bold text-gray-900 mb-4 border-b border-gray-100 pb-3">Requirements and Qualifications</h2>
                    <div class="space-y-6">
                        <div>
                            <h3 class="font-semibold text-gray-800 mb-2">Required Skills:</h3>
                            <ul class="list-disc pl-5 text-gray-600 text-sm md:text-base space-y-1.5 marker:text-gray-400">
                                @foreach ($job->qualifications as $quality)
                                    <li>{{ $quality }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-800 mb-2">Preferred Skills:</h3>
                            <ul class="list-disc pl-5 text-gray-600 text-sm md:text-base space-y-1.5 marker:text-gray-400">
                                @foreach ($job->preferred_skills as $skill)
                                    <li>{{ $skill }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-800 mb-2">Education:</h3>
                            <p class="text-gray-600 text-sm md:text-base pl-1">{{ $job->education }}</p>
                        </div>
                    </div>
                </div>


                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
                    <h2 class="text-xl font-bold text-gray-900 mb-4 border-b border-gray-100 pb-3">About {{ $job->company->name }}</h2>
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">{{ $job->company->description }}</p>
                    <a href="#" class="inline-block mt-4 text-brand-purple font-semibold hover:underline text-sm">View all jobs at this company &rarr;</a>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 sticky top-6">
                    <h2 class="text-lg font-bold text-gray-900 mb-6 border-b border-gray-100 pb-3">Job Overview</h2>

                    <div class="space-y-5">
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-purple-50 flex items-center justify-center text-brand-purple shrink-0">
                                <i class="fa-solid fa-money-bill-wave"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-medium uppercase tracking-wider">Salary Range</p>
                                <p class="text-sm font-semibold text-gray-900">
                                    ${{ number_format($job->minimum_salary) }} - ${{ number_format($job->maximum_salary) }}
                                    <span class="text-gray-500 font-normal">/ {{ $job->salary_type }}</span>
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-purple-50 flex items-center justify-center text-brand-purple shrink-0">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-medium uppercase tracking-wider">Job Type</p>
                                <p class="text-sm font-semibold text-gray-900">{{ $job->job_type }}</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-purple-50 flex items-center justify-center text-brand-purple shrink-0">
                                <i class="fa-solid fa-laptop-house"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-medium uppercase tracking-wider">Workplace</p>
                                <p class="text-sm font-semibold text-gray-900">{{ $job->work_placement }}</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-purple-50 flex items-center justify-center text-brand-purple shrink-0">
                                <i class="fa-solid fa-layer-group"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-medium uppercase tracking-wider">Seniority Level</p>
                                <p class="text-sm font-semibold text-gray-900">{{ $job->seniority_level }}</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-purple-50 flex items-center justify-center text-brand-purple shrink-0">
                                <i class="fa-solid fa-calendar-xmark"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-medium uppercase tracking-wider">Apply Before</p>
                                <p class="text-sm font-semibold text-red-600">{{ \Carbon\Carbon::parse($job->application_deadline)->format('F d, Y') }}</p>
                            </div>
                        </div>
                    </div>

                  
                        

                    <div class="mt-8 pt-6 border-t border-gray-100">
                        <p class="text-xs text-gray-500 text-center mb-3">Candidates are appling for this job</p>
                       <a href="#"> <button class="w-full py-3.5 bg-brand-purple text-white text-base font-bold rounded-lg shadow-md hover:bg-brand-dark transition cursor-pointer">
                            Apply Now
                        </button>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</main>

<x-footer />