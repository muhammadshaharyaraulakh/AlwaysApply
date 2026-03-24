<x-navigationbar />
<section class="bg-gray-50 min-h-screen pb-20">
  
  <div
    class="w-full h-32 md:h-48 bg-gradient-to-r from-brand-purple to-purple-400"
    @if($user->information && $user->information->cover_photo)
        style="background-image: url('{{ asset('storage/' . $user->information->cover_photo) }}'); background-size: cover; background-position: center;"
    @endif
  ></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 md:-mt-16 relative z-10">
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 md:p-8 flex flex-col md:flex-row items-center md:items-end gap-6 relative">
      <div class="relative flex-shrink-0">
        <img
          src="{{ $user->information && $user->information->avatar_photo ? asset('storage/' . $user->information->avatar_photo) : 'https://ui-avatars.com/api/?name='.urlencode($user->name).'&background=f3e8ff&color=6300B3&size=150' }}"
          alt="Profile Picture"
          class="w-24 h-24 md:w-32 md:h-32 rounded-full border-4 border-white shadow-md object-cover bg-white"
        />
      </div>

      <div class="flex-1 text-center md:text-left mt-2 md:mt-0">
        <div class="flex flex-col md:flex-row md:items-center gap-2 md:gap-3 mb-1 justify-center md:justify-start">
          <h1 class="text-2xl md:text-3xl font-bold text-gray-900">{{ $user->name }}</h1>
          <span class="text-blue-500 text-lg md:text-xl" title="Identity Verified">
            <i class="fa-solid fa-circle-check"></i>
          </span>
          
          @if($user->information && $user->information->availability_status)
            <span class="bg-green-100 text-green-700 text-xs font-bold px-2.5 py-1 rounded-md uppercase tracking-wide ml-0 md:ml-2">
                {{ $user->information->availability_status }}
            </span>
          @endif
        </div>
        
        <p class="text-gray-700 font-medium text-sm md:text-base">
          {{ $user->information->professional_headline ?? 'Professional Title Not Set' }}
        </p>
        
        <div class="flex flex-wrap items-center justify-center md:justify-start gap-x-4 gap-y-2 mt-2 text-sm text-gray-500">
          @if($user->information && $user->information->location)
              <span class="flex items-center gap-1.5"><i class="fa-solid fa-location-dot"></i> {{ $user->information->location }}</span>
          @endif
          
          <span class="flex items-center gap-1.5"><i class="fa-solid fa-envelope"></i> {{ $user->email }}</span>
          
          @if($user->information && $user->information->phone)
              <span class="flex items-center gap-1.5"><i class="fa-solid fa-phone"></i> {{ $user->information->phone }}</span>
          @endif
        </div>
      </div>

      <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto mt-4 md:mt-0">
        @if($user->information && $user->information->resume)
            <a href="{{ asset('storage/' . $user->information->resume) }}" target="_blank" class="px-5 py-2.5 bg-brand-purple text-white font-semibold rounded-lg shadow-md hover:bg-brand-dark transition flex items-center justify-center gap-2 cursor-pointer w-full sm:w-auto text-sm">
              <i class="fa-solid fa-file-arrow-down"></i> Download Resume
            </a>
        @endif
      </div>
    </div>

    <div class="mt-6 grid grid-cols-1 lg:grid-cols-3 gap-6">
      <div class="lg:col-span-1 space-y-6">
        
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
          <h2 class="text-lg font-bold text-gray-900 mb-4">Skills</h2>
          <div class="flex flex-wrap gap-2">
            @forelse($user->skills as $skill)
                <span class="bg-purple-50 text-brand-purple border border-purple-100 px-3 py-1.5 rounded-lg text-sm font-medium">
                    {{ $skill->skill }}
                </span>
            @empty
                <p class="text-sm text-gray-400">No skills added yet.</p>
            @endforelse
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
          <h2 class="text-lg font-bold text-gray-900 mb-4">Digital Footprint</h2>
          <ul class="space-y-3">
            @if($user->information && $user->information->github)
                <li>
                  <a href="{{ $user->information->github }}" target="_blank" class="flex items-center gap-3 text-sm text-gray-600 hover:text-brand-purple transition">
                    <i class="fa-brands fa-github text-xl w-6 text-center text-gray-800"></i>
                    {{ preg_replace('#^https?://(www\.)?#', '', rtrim($user->information->github, '/')) }}
                  </a>
                </li>
            @endif
            @if($user->information && $user->information->linkedin)
                <li>
                  <a href="{{ $user->information->linkedin }}" target="_blank" class="flex items-center gap-3 text-sm text-gray-600 hover:text-brand-purple transition">
                    <i class="fa-brands fa-linkedin text-xl w-6 text-center text-[#0A66C2]"></i>
                    {{ preg_replace('#^https?://(www\.)?#', '', rtrim($user->information->linkedin, '/')) }}
                  </a>
                </li>
            @endif
            @if($user->information && $user->information->facebook)
                <li>
                  <a href="{{ $user->information->facebook }}" target="_blank" class="flex items-center gap-3 text-sm text-gray-600 hover:text-brand-purple transition">
                    <i class="fa-brands fa-facebook text-xl w-6 text-center text-[#1877F2]"></i>
                    {{ preg_replace('#^https?://(www\.)?#', '', rtrim($user->information->facebook, '/')) }}
                  </a>
                </li>
            @endif
            @if($user->information && $user->information->instagram)
                <li>
                  <a href="{{ $user->information->instagram }}" target="_blank" class="flex items-center gap-3 text-sm text-gray-600 hover:text-brand-purple transition">
                    <i class="fa-brands fa-instagram text-xl w-6 text-center text-[#E4405F]"></i>
                    {{ preg_replace('#^https?://(www\.)?#', '', rtrim($user->information->instagram, '/')) }}
                  </a>
                </li>
            @endif
            
            @if(!$user->information || (!$user->information->github && !$user->information->linkedin && !$user->information->facebook && !$user->information->instagram))
                <p class="text-sm text-gray-400">No social links added.</p>
            @endif
          </ul>
        </div>
      </div>

      <div class="lg:col-span-2 space-y-6">
        
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
          <h2 class="text-xl font-bold text-gray-900 mb-3">About Me</h2>
          <p class="text-gray-600 leading-relaxed text-sm md:text-base whitespace-pre-line">
            {{ $user->information->about_me ?? 'This user has not written a bio yet.' }}
          </p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
          <h2 class="text-xl font-bold text-gray-900 mb-5">Experience</h2>
          <div class="space-y-6">
            @forelse($user->experiences as $exp)
                <div class="flex gap-4">
                  <div class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center text-brand-purple shrink-0 mt-1">
                    <i class="fa-solid fa-briefcase text-xl"></i>
                  </div>
                  <div>
                    <h3 class="font-bold text-gray-900 text-lg">{{ $exp->title }}</h3>
                    <p class="text-sm font-medium text-gray-700 mb-1">
                      {{ $exp->company }}
                      @if($exp->location)
                        <span class="text-gray-400 font-normal ml-2">• {{ $exp->location }}</span>
                      @endif
                    </p>
                    <p class="text-xs text-gray-500 mb-3">
                        {{ $exp->start_month }} {{ $exp->start_year }} - {{ $exp->end_year ? $exp->end_month . ' ' . $exp->end_year : 'Present' }}
                    </p>
                    <p class="text-sm text-gray-600">{{ $exp->description }}</p>
                  </div>
                </div>
            @empty
                <p class="text-gray-500">No experience listed.</p>
            @endforelse
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
          <h2 class="text-xl font-bold text-gray-900 mb-5">Featured Projects</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @forelse($user->projects as $proj)
                <div class="border border-gray-200 rounded-xl p-5 hover:border-brand-purple transition group flex flex-col">
                  <div class="flex justify-between items-start mb-2">
                    <h3 class="font-bold text-gray-900 group-hover:text-brand-purple transition text-lg leading-tight">{{ $proj->title }}</h3>
                    @if($proj->link)
                        <a href="{{ $proj->link }}" target="_blank" class="text-gray-400 hover:text-gray-700 shrink-0 ml-2">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    @endif
                  </div>
                  <p class="text-sm text-gray-500 mb-3 flex-1">{{ $proj->description }}</p>
                  <div class="flex flex-wrap gap-2 text-xs font-medium text-gray-500 mt-auto">
                    @foreach(array_map('trim', explode(',', $proj->technologies)) as $tech)
                        @if(!empty($tech))
                            <span class="bg-gray-100 px-2 py-1 rounded">{{ $tech }}</span>
                        @endif
                    @endforeach
                  </div>
                </div>
            @empty
                <p class="text-gray-500 col-span-full">No projects added yet.</p>
            @endforelse
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
          <h2 class="text-xl font-bold text-gray-900 mb-6">Education</h2>
          <div class="relative border-l-2 border-gray-100 ml-3 space-y-8">
            @forelse($user->education as $edu)
                <div class="relative pl-6">
                  <div class="absolute -left-[9px] top-1 w-4 h-4 bg-white border-2 {{ $loop->first ? 'border-brand-purple' : 'border-gray-300' }} rounded-full"></div>
                  
                  <h3 class="font-bold text-gray-900 text-lg">{{ $edu->name }}</h3>
                  <p class="text-sm font-medium text-gray-700 mb-1">{{ $edu->institute }}</p>
                  <p class="text-xs text-gray-500 mb-2">{{ $edu->start }} - {{ $edu->completed }}</p>
                  <p class="text-sm text-gray-600">{{ $edu->description }}</p>
                </div>
            @empty
                <p class="text-gray-500 pl-4 border-none">No education records added.</p>
            @endforelse
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<x-footer />