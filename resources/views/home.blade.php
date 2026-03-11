
<x-navigationbar />
<header
  class="relative w-full min-h-screen flex items-center bg-gradient-to-r from-purple-50 to-white px-6 md:px-16 overflow-hidden"
>
  <div
    class="max-w-5xl w-full mx-auto flex flex-col lg:flex-row items-center gap-10"
  >
    <div class="w-full lg:w-1/2 z-10 flex flex-col">
      <h1
        class="text-3xl md:text-5xl lg:text-5xl font-semibold text-brand-purple leading-tight mb-2 mt-6"
        data-aos="fade-right"
      >
        Find a job that aligns with your interests and skills
      </h1>

      <p 
        class="text-gray-500 text-lg mb-8"
        data-aos="fade-right"
        data-aos-delay="100"
      >
        Thousands of jobs in all the leading sector are waiting for you.
      </p>

      <div
        class="bg-white p-2 rounded-lg shadow-lg flex flex-col md:flex-col lg:flex-row items-center gap-2 border border-gray-100 w-full"
      >
        <div
          class="flex items-center px-4 w-full lg:w-auto flex-grow border-b md:border-b-0 lg:border-b-0 lg:border-r border-gray-200 py-3 md:py-0"
        >
          <i class="fa-solid fa-magnifying-glass text-gray-400 mr-3"></i>
          <input
            type="text"
            placeholder="Job title, Keyword"
            class="w-full outline-none text-gray-600 placeholder-gray-400"
          />
        </div>
        <div
          class="flex items-center px-4 w-full lg:w-auto flex-grow py-3 md:py-0"
        >
          <i class="fa-solid fa-location-dot text-gray-400 mr-3"></i>
          <input
            type="text"
            placeholder="Location"
            class="w-full outline-none text-gray-600 placeholder-gray-400"
          />
        </div>
        <button
          class="w-full lg:w-auto px-8 py-3 bg-brand-purple text-white font-medium rounded-md hover:bg-brand-dark transition"
        >
          Search
        </button>
      </div>

      <p 
        class="text-sm text-gray-500 mt-6"
      >
        Suggestion:
        <span class="text-gray-700">
          UI Designer, Programming,
          <span class="text-brand-purple font-medium">
            Digital Marketing.
          </span>
        </span>
      </p>
    </div>

    <div class="w-full lg:w-1/2 flex justify-center relative mt-10 lg:mt-0">
      <div
        class="absolute top-0 right-0 w-64 h-64 bg-purple-200 rounded-full filter blur-3xl opacity-30"
      ></div>

      <img
        src="{{asset('images/hero.png')}}"
        alt="Job Search Illustration"
        class="relative z-10 w-full max-w-md object-contain drop-shadow-lg"
      />
    </div>
  </div>
</header>

<section class="py-16 px-6 md:px-16 bg-white w-full overflow-hidden">
  <div
    class="max-w-5xl w-full mx-auto flex flex-col lg:flex-row items-center gap-10"
  >
    <div
      class="w-full lg:w-1/2 flex justify-center relative mt-10 lg:mt-0 order-2 lg:order-1"
      data-aos="fade-right"
      data-aos-duration="1500"
    >
      <div
        class="absolute top-0 left-0 w-64 h-64 bg-purple-100 rounded-full filter blur-3xl opacity-40"
      ></div>

      <img
        src="{{asset('images/about.png')}}"
        alt="About Us Illustration"
        class="relative z-10 w-full max-w-md object-contain drop-shadow-sm"
      />
    </div>

    <div class="w-full lg:w-1/2 z-10 flex flex-col order-1 lg:order-2">
      <span
        class="text-brand-purple font-medium text-sm uppercase tracking-wider mb-2"
        data-aos="fade-left"
        data-aos-delay="100"
      >
        Know More About Us
      </span>

      <h2
        class="text-3xl md:text-4xl lg:text-4xl font-semibold text-gray-900 leading-tight mb-6"
        data-aos="fade-left"
        data-aos-delay="200"
      >
        Bridging the gap between
        <span class="text-brand-purple">Talent</span> and
        <span class="text-brand-purple">Opportunity</span>
      </h2>

      <p 
        class="text-gray-500 text-lg mb-6 leading-relaxed"
        data-aos="fade-left"
        data-aos-delay="300"
      >
        At AlwaysApply, we believe that finding the right job or the perfect
        candidate shouldn't be a struggle. Our platform is designed to make the
        hiring process seamless, transparent, and efficient for both job seekers
        and top-tier employers.
      </p>

      <div 
        class="flex items-center gap-8 mt-2 mb-8"
        data-aos="fade-up"
        data-aos-delay="400"
      >
        <div class="flex flex-col">
          <span class="text-3xl font-semibold text-brand-purple">10k+</span>
          <span class="text-sm text-gray-500 font-medium mt-1"
            >Active Jobs</span
          >
        </div>

        <div class="w-px h-12 bg-gray-200"></div>
        <div class="flex flex-col">
          <span class="text-3xl font-semibold text-brand-purple">5k+</span>
          <span class="text-sm text-gray-500 font-medium mt-1">Companies</span>
        </div>
      </div>

      <div data-aos="zoom-in" data-aos-delay="500">
        <a
          href="/jobs"
          class="inline-block px-8 py-3 border border-brand-purple text-brand-purple font-medium rounded-md hover:bg-brand-purple hover:text-white transition"
        >
          Looking For Job
        </a>
      </div>
    </div>
  </div>
</section>

<section class="py-16 px-6 md:px-12 bg-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12">
      <h2 
        class="text-3xl font-bold text-brand-purple"
        data-aos="fade-up"
      >
        Featured Jobs
      </h2>
      <p 
        class="text-gray-500 mt-2"
        data-aos="fade-up"
        data-aos-delay="100"
      >
        Choose jobs from the top employers and apply for the same.
      </p>
    </div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
  @foreach($jobs->slice(0, 9) as $job)
    <div
        class="bg-purple-50 p-6 rounded-xl border border-purple-100 hover:shadow-lg transition"
        data-aos="fade-up"
        data-aos-delay="100"
      >
        <div class="flex justify-between items-start mb-4">
          <div>
            <h3 class="font-bold text-gray-900">{{$job->title}}</h3>
            <span class="text-green-600 text-xs font-bold uppercase"></span>
            <span class="text-gray-500 text-xs ml-2">Salary: {{$job->minimum_salary}} - {{$job->maximum_salary}} {{$job->salary_type}}</span>
          </div>
          <i class="fa-regular fa-bookmark text-gray-400 cursor-pointer hover:text-brand-purple"></i>
        </div>
        <div class="flex items-center gap-3 mb-6">
          <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-sm">
            <img src="{{ asset('images/company/' . $job->company->logo) }}" class="w-6 h-6" alt="{{ $job->company->name }}" />
          </div>
          <div>
            <p class="font-semibold text-sm">{{ $job->company->name }}</p>
            <p class="text-xs text-gray-500"><i class="fa-solid fa-location-dot mr-1"></i> {{ $job->company->location }}</p>
          </div>
        </div>
        <div class="flex justify-between items-center mt-6">
          <div class="flex -space-x-2">
            <img class="w-7 h-7 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=1" alt="" />
            <img class="w-7 h-7 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=2" alt="" />
            <img class="w-7 h-7 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=3" alt="" />
            <span class="text-xs text-gray-500 self-center ml-2 pl-1">10+ applicants</span>
          </div>
        </div>
        <div class="flex gap-3 mt-6">
         <button class="flex-1 py-2 border border-gray-300 rounded text-sm font-medium hover:border-brand-purple hover:text-brand-purple transition"><a href="{{ route('job', $job->id) }}">View details</a></button> 
          <button class="flex-1 py-2 bg-brand-purple text-white rounded text-sm font-medium hover:bg-brand-dark transition">Apply now</button>
        </div>
      </div>
  @endforeach
</div>

     
    <div 
      class="text-center mt-10"
      data-aos="zoom-in"
      data-aos-delay="400"
    >
      <a
        href="/joblisting"
        class="inline-block px-8 py-3 border border-brand-purple text-brand-purple font-medium rounded-md hover:bg-brand-purple hover:text-white transition"
      >
        View All Jobs
      </a>
    </div>
  </div>
</section>
<section class="py-16 px-6 md:px-16 bg-white overflow-hidden">
  <div
    class="max-w-5xl w-full mx-auto flex flex-col lg:flex-row items-center gap-10"
  >
    <div class="w-full lg:w-1/2 z-10 flex flex-col">
      <span
        class="text-brand-purple font-medium text-sm uppercase tracking-wider mb-2"
        data-aos="fade-right"
        data-aos-delay="100"
      >
        For Employers
      </span>

      <h2
        class="text-3xl md:text-4xl lg:text-4xl font-semibold text-gray-900 leading-tight mb-6"
        data-aos="fade-right"
        data-aos-delay="200"
      >
        Build your dream team with
        <span class="text-brand-purple">Ease</span>
      </h2>

      <p 
        class="text-gray-500 text-lg mb-6 leading-relaxed"
        data-aos="fade-right"
        data-aos-delay="300"
      >
        Hire the best talent from our pool of thousands of qualified candidates.
        Our platform offers powerful tools to help you find, evaluate, and
        connect with the right candidates quickly and efficiently.
      </p>

      <div 
        class="flex items-center gap-8 mt-2 mb-8"
        data-aos="fade-up"
        data-aos-delay="400"
      >
        <div class="flex flex-col">
          <span class="text-xl font-semibold text-gray-800"
            ><i class="fa-solid fa-bolt text-brand-purple mr-1"></i> Fast</span
          >
          <span class="text-sm text-gray-500 font-medium mt-1"
            >Hiring Process</span
          >
        </div>
        <div class="w-px h-12 bg-gray-200"></div>
        <div class="flex flex-col">
          <span class="text-xl font-semibold text-gray-800"
            ><i class="fa-solid fa-users text-brand-purple mr-1"></i>
            100k+</span
          >
          <span class="text-sm text-gray-500 font-medium mt-1"
            >Verified Candidates</span
          >
        </div>
      </div>

      <div data-aos="zoom-in" data-aos-delay="500">
        <a
          href="/company"
          class="inline-block px-8 py-3 border border-brand-purple text-brand-purple font-medium rounded-md hover:bg-brand-purple hover:text-white transition"
        >
          Register Company
        </a>
      </div>
    </div>

    <div 
      class="w-full lg:w-1/2 flex justify-center relative mt-10 lg:mt-0"
      data-aos="fade-left"
      data-aos-duration="1500"
    >
      <div class="absolute top-0 right-0 w-64 h-64 opacity-40"></div>

      <img
        src="{{asset('images/register.png')}}"
        alt="Company Hiring Illustration"
        class="relative z-10 w-full h-full object-cover transition transform hover:-translate-y-1 duration-300"
      />
    </div>
  </div>
</section>


<x-footer />
</body>
</html>
