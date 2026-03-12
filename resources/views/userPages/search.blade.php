<x-navigationbar />
  <div class="w-full ">


   <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

@foreach ($jobs as $job)

<div class="bg-purple-50 p-6 rounded-xl border border-purple-100 hover:shadow-md transition relative group">

    <i class="fa-regular fa-bookmark absolute top-6 right-6 text-gray-400 cursor-pointer hover:text-brand-purple"></i>

    <h3 class="font-bold text-gray-900 text-lg">
        {{ $job->title }}
    </h3>

    <div class="mt-1 mb-4 flex items-center gap-2">

        <span class="text-green-600 text-xs font-bold uppercase">
            {{ $job->job_type }}
        </span>

        <span class="text-gray-400 text-xs">•</span>

        <span class="text-gray-500 text-xs">
            Salary: {{ $job->minimum_salary }}$ - {{ $job->maximum_salary }}$ / {{$job->salary_type }}
        </span>

    </div>

    <div class="flex items-center gap-3 mb-6">

        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-sm">

            <img src="{{ asset('images/company/' . $job->company->logo) }}" class="w-6 h-6" alt="logo">

        </div>

        <div>
            <p class="font-semibold text-sm">
                {{ $job->company->name }}
            </p>

            <p class="text-xs text-gray-500">
                <i class="fa-solid fa-location-dot mr-1"></i>
                {{ $job->company->location }}
            </p>
        </div>

    </div>

    <div class="flex items-center gap-2 mb-6">

        <div class="flex -space-x-2">
            <img class="w-6 h-6 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=1">
            <img class="w-6 h-6 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=2">
        </div>

        <span class="text-xs text-gray-500">
            {{ rand(5,30) }}+ applicants
        </span>

    </div>

    <div class="flex gap-3">

                 <button class="flex-1 py-2 border border-gray-300 rounded text-sm font-medium hover:border-brand-purple hover:text-brand-purple transition"><a href="{{ route('job', $job->id) }}">View details</a></button> 

        <a href="#"
           class="flex-1 text-center py-2 bg-brand-purple text-white rounded text-sm font-medium hover:bg-brand-dark transition">

           Apply now
        </a>

    </div>

</div>

@endforeach

</div>

<div class="mt-8">
    {{ $jobs->links() }}
</div>

   
  </div>