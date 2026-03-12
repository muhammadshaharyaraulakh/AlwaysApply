<x-navigationbar />
<div class="max-w-7xl mx-auto px-4 md:px-8 pt-10 pb-6">
  <h1 class="text-4xl font-semibold text-brand-purple">Job Search</h1>
  <p class="text-gray-500 mt-1 mb-8">
    Search for your desired job matching your skills
  </p>
  <form action="{{route('search')}}" method="post">
    @csrf

  <div
    class="bg-white p-2 rounded-lg shadow-sm border border-gray-200 flex flex-col md:flex-row items-center"
  >
    <div
      class="flex-1 w-full px-4 py-3 border-b md:border-b-0 md:border-r border-gray-100 flex items-center gap-3"
    >
      <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
      <input
        type="text"
        name="title"
        placeholder="Enter Job title"
        class="w-full outline-none text-gray-600 text-sm placeholder-gray-400"
      />
    </div>
    <div
      class="flex-1 w-full px-4 py-3 border-b md:border-b-0 md:border-r border-gray-100 flex items-center gap-3"
    >
      <i class="fa-solid fa-location-dot text-gray-400"></i>
      <input
        type="text"
        name="location"
        placeholder="Enter location"
        class="w-full outline-none text-gray-600 text-sm placeholder-gray-400"
      />
    </div>
    <div class="flex-1 w-full px-4 py-3 flex items-center gap-3">
      <i class="fa-solid fa-briefcase text-gray-400"></i>
      <input
        type="text"
        name="type"
        placeholder="Job Type (e.g. Full-time)"
        class="w-full outline-none text-gray-600 text-sm placeholder-gray-400"
      />
    </div>
    <button
      class="w-full cursor-pointer md:w-auto px-10 py-3 bg-brand-purple text-white font-medium rounded hover:bg-brand-dark transition m-1"
    >
      Search
    </button>
  </div>
  </form>
</div>

<section
  class="max-w-7xl mx-auto px-4 md:px-8 py-6 flex flex-col lg:flex-row gap-8"
>
  <aside class="w-full lg:w-1/4 flex-shrink-0">
    <div class="flex justify-between items-center mb-4">
      <h3 class="font-bold text-lg text-gray-900">Filter</h3>
      <button class="text-xs text-red-500 font-medium hover:underline">
        Clear all
      </button>
    </div>

    <div
      class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 space-y-6"
    >
      <div class="filter-section">
        <div
          class="flex justify-between items-center cursor-pointer"
          onclick="toggleFilter('salary-content', this)"
        >
          <h4 class="font-semibold text-sm text-gray-800">Salary Range</h4>
          <i
            class="fa-solid fa-chevron-up text-xs text-gray-400 rotate-icon"
          ></i>
        </div>
        <div id="salary-content" class="filter-content expanded">
          <div class="flex items-center gap-2">
            <input
              type="text"
              placeholder="Min"
              class="w-full border border-gray-200 rounded px-3 py-2 text-sm outline-none focus:border-brand-purple"
            />
            <input
              type="text"
              placeholder="Max"
              class="w-full border border-gray-200 rounded px-3 py-2 text-sm outline-none focus:border-brand-purple"
            />
          </div>
        </div>
      </div>
      <hr class="border-gray-100" />

      <div class="filter-section">
        <div
          class="flex justify-between items-center cursor-pointer"
          onclick="toggleFilter('jobtype-content', this)"
        >
          <h4 class="font-semibold text-sm text-gray-800">Job Type</h4>
          <i
            class="fa-solid fa-chevron-up text-xs text-gray-400 rotate-icon"
          ></i>
        </div>
        <div id="jobtype-content" class="filter-content expanded space-y-3">
          <label class="flex items-center gap-3 cursor-pointer group">
            <input type="checkbox" checked class="custom-checkbox" />
            <span class="text-sm text-gray-600 group-hover:text-brand-purple"
              >All (2567)</span
            >
          </label>
          <label class="flex items-center gap-3 cursor-pointer group">
            <input type="checkbox" class="custom-checkbox" />
            <span class="text-sm text-gray-600 group-hover:text-brand-purple"
              >Full-Time (450)</span
            >
          </label>
          <label class="flex items-center gap-3 cursor-pointer group">
            <input type="checkbox" class="custom-checkbox" />
            <span class="text-sm text-gray-600 group-hover:text-brand-purple"
              >Part-Time (145)</span
            >
          </label>
          <label class="flex items-center gap-3 cursor-pointer group">
            <input type="checkbox" class="custom-checkbox" />
            <span class="text-sm text-gray-600 group-hover:text-brand-purple"
              >Internship (55)</span
            >
          </label>
        </div>
      </div>
      <hr class="border-gray-100" />

      <div class="filter-section">
        <div
          class="flex justify-between items-center cursor-pointer"
          onclick="toggleFilter('workmode-content', this)"
        >
          <h4 class="font-semibold text-sm text-gray-800">Work Mode</h4>
          <i
            class="fa-solid fa-chevron-up text-xs text-gray-400 rotate-icon"
          ></i>
        </div>
        <div id="workmode-content" class="filter-content expanded space-y-3">
          <label class="flex items-center gap-3 cursor-pointer group">
            <input type="checkbox" class="custom-checkbox" />
            <span class="text-sm text-gray-600 group-hover:text-brand-purple"
              >On-Site</span
            >
          </label>
          <label class="flex items-center gap-3 cursor-pointer group">
            <input type="checkbox" class="custom-checkbox" />
            <span class="text-sm text-gray-600 group-hover:text-brand-purple"
              >Remote (180)</span
            >
          </label>
          <label class="flex items-center gap-3 cursor-pointer group">
            <input type="checkbox" class="custom-checkbox" />
            <span class="text-sm text-gray-600 group-hover:text-brand-purple"
              >Hybrid (200)</span
            >
          </label>
        </div>
      </div>
      <hr class="border-gray-100" />

      <div class="filter-section">
        <div
          class="flex justify-between items-center cursor-pointer"
          onclick="toggleFilter('jobfunc-content', this)"
        >
          <h4 class="font-semibold text-sm text-gray-800">Job Functions</h4>
          <i
            class="fa-solid fa-chevron-up text-xs text-gray-400 rotate-icon"
          ></i>
        </div>
        <div id="jobfunc-content" class="filter-content expanded space-y-3">
          <label class="flex items-center gap-3 cursor-pointer group">
            <input type="checkbox" class="custom-checkbox" />
            <span class="text-sm text-gray-600 group-hover:text-brand-purple"
              >Marketing (21)</span
            >
          </label>
          <label class="flex items-center gap-3 cursor-pointer group">
            <input type="checkbox" class="custom-checkbox" />
            <span class="text-sm text-gray-600 group-hover:text-brand-purple"
              >Engineering (45)</span
            >
          </label>
          <label class="flex items-center gap-3 cursor-pointer group">
            <input type="checkbox" class="custom-checkbox" />
            <span class="text-sm text-gray-600 group-hover:text-brand-purple"
              >Design (71)</span
            >
          </label>
        </div>
      </div>

      <div class="pt-2 flex flex-col gap-3">
        <button
          onclick="expandAll()"
          class="text-brand-purple font-medium text-sm flex items-center justify-center gap-2 w-full hover:underline"
        >
          <i class="fa-solid fa-up-right-and-down-left-from-center"></i> Expand
          all
        </button>

        <button
          class="w-full bg-brand-purple text-white font-semibold py-2.5 rounded shadow-md hover:bg-brand-dark transition text-sm"
        >
          Apply Filters
        </button>
      </div>
    </div>
  </aside>

  <div class="w-full lg:w-3/4">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-xl font-bold text-gray-900">All Jobs (2310)</h2>
    </div>

   <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

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
</section>
<x-footer />
</body>
</html>
