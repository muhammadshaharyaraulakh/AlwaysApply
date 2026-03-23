<x-navigationbar />
<meta name="csrf-token" content="{{ csrf_token() }}">
<section class="bg-gray-50 min-h-screen">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="flex flex-col lg:flex-row gap-8">
      <aside class="w-full lg:w-64 flex-shrink-0">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4 sticky top-6">
          <div class="text-center pb-4 border-b border-gray-100 mb-4">
            <img src="https://ui-avatars.com/api/?name=Anil&background=f3e8ff&color=6300B3&size=150" alt="Avatar" class="w-20 h-20 rounded-full mx-auto mb-2 object-cover border-2 border-brand-purple" />
            <h2 class="font-bold text-gray-900 text-lg">Anil</h2>
            <a href="/profile/public" class="text-xs text-brand-purple font-medium hover:underline">View Public Profile</a>
          </div>

          <nav class="space-y-1" id="dashboard-nav">
            <button onclick="switchTab('section-home', this)" class="nav-btn w-full flex items-center gap-3 bg-purple-50 text-brand-purple px-4 py-3 rounded-lg font-medium transition cursor-pointer">
              <i class="fa-solid fa-house w-5 text-center"></i> Dashboard Home
            </button>
            <button onclick="switchTab('section-profile-info', this)" class="nav-btn w-full flex items-center gap-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-4 py-3 rounded-lg font-medium transition cursor-pointer">
              <i class="fa-solid fa-user-pen w-5 text-center"></i> Edit Profile Info
            </button>
            <button onclick="switchTab('section-experience', this)" class="nav-btn w-full flex items-center gap-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-4 py-3 rounded-lg font-medium transition cursor-pointer">
              <i class="fa-solid fa-briefcase w-5 text-center"></i> Experience
            </button>
            <button onclick="switchTab('section-education', this)" class="nav-btn w-full flex items-center gap-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-4 py-3 rounded-lg font-medium transition cursor-pointer">
              <i class="fa-solid fa-graduation-cap w-5 text-center"></i> Education
            </button>
            <button onclick="switchTab('section-projects', this)" class="nav-btn w-full flex items-center gap-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-4 py-3 rounded-lg font-medium transition cursor-pointer">
              <i class="fa-solid fa-code w-5 text-center"></i> Projects
            </button>
            <button onclick="switchTab('section-skills', this)" class="nav-btn w-full flex items-center gap-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-4 py-3 rounded-lg font-medium transition cursor-pointer">
              <i class="fa-solid fa-tags w-5 text-center"></i> Skills
            </button>
            <button onclick="switchTab('section-applications', this)" class="nav-btn w-full flex items-center gap-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-4 py-3 rounded-lg font-medium transition mt-4 pt-4 border-t border-gray-100 cursor-pointer">
              <i class="fa-solid fa-paper-plane w-5 text-center"></i> My Applications
            </button>
          </nav>
        </div>
      </aside>

      <div class="flex-1">
        <div id="section-home" class="dashboard-section space-y-6 block">
          <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-2 gap-4">
            <div>
              <h1 class="text-2xl md:text-3xl font-bold text-gray-900">
                Welcome back, Anil! <span class="text-brand-purple">👋</span>
              </h1>
              <p class="text-gray-500 text-sm mt-1">
                Here is what's happening with your profile today.
              </p>
            </div>
            <a href="/jobs" class="px-5 py-2.5 bg-white border border-gray-200 text-gray-700 font-semibold rounded-lg shadow-sm hover:bg-gray-50 hover:text-brand-purple transition cursor-pointer flex items-center gap-2 text-sm">
              <i class="fa-solid fa-magnifying-glass"></i> Explore Jobs
            </a>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex items-center gap-4 hover:border-blue-200 transition cursor-default">
              <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center text-xl shrink-0">
                <i class="fa-solid fa-eye"></i>
              </div>
              <div>
                <p class="text-2xl font-bold text-gray-900">42</p>
                <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Profile Views</p>
              </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex items-center gap-4 hover:border-purple-200 transition cursor-default">
              <div class="w-12 h-12 bg-purple-50 text-brand-purple rounded-lg flex items-center justify-center text-xl shrink-0">
                <i class="fa-solid fa-paper-plane"></i>
              </div>
              <div>
                <p class="text-2xl font-bold text-gray-900">12</p>
                <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Jobs Applied</p>
              </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex items-center gap-4 hover:border-green-200 transition cursor-default">
              <div class="w-12 h-12 bg-green-50 text-green-600 rounded-lg flex items-center justify-center text-xl shrink-0">
                <i class="fa-solid fa-handshake"></i>
              </div>
              <div>
                <p class="text-2xl font-bold text-gray-900">2</p>
                <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Interviews</p>
              </div>
            </div>
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 pt-2">
            <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
              <div class="flex justify-between items-center mb-3">
                <h2 class="text-lg font-bold text-gray-900">
                  Profile Strength: <span class="text-brand-purple">85%</span>
                </h2>
                <span class="bg-purple-50 text-brand-purple text-xs font-bold px-3 py-1 rounded-full border border-purple-100">All-Star</span>
              </div>

              <div class="w-full bg-gray-100 rounded-full h-2 mb-8">
                <div class="bg-brand-purple h-2 rounded-full" style="width: 85%"></div>
              </div>

              <h3 class="font-bold text-gray-800 text-sm mb-4">Next steps to stand out to employers:</h3>

              <div class="space-y-3">
                <div class="flex items-center justify-between p-4 border border-gray-100 rounded-xl hover:border-brand-purple hover:shadow-sm transition bg-gray-50 hover:bg-white group cursor-pointer" onclick="switchTab('section-profile-info', document.querySelectorAll('.nav-btn')[1])">
                  <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-gray-400 group-hover:text-brand-purple transition">
                      <i class="fa-brands fa-github text-lg"></i>
                    </div>
                    <div>
                      <p class="font-bold text-gray-900 text-sm">Add your GitHub link</p>
                      <p class="text-xs text-gray-500">Recruiters want to see your code repositories.</p>
                    </div>
                  </div>
                  <button class="text-sm font-bold text-brand-purple hover:underline cursor-pointer px-2">Add Link</button>
                </div>

                <div class="flex items-center justify-between p-4 border border-gray-100 rounded-xl hover:border-brand-purple hover:shadow-sm transition bg-gray-50 hover:bg-white group cursor-pointer" onclick="switchTab('section-experience', document.querySelectorAll('.nav-btn')[2])">
                  <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-gray-400 group-hover:text-brand-purple transition">
                      <i class="fa-solid fa-briefcase text-lg"></i>
                    </div>
                    <div>
                      <p class="font-bold text-gray-900 text-sm">Update your experience</p>
                      <p class="text-xs text-gray-500">Candidates with 2+ roles get 4x more profile views.</p>
                    </div>
                  </div>
                  <button class="text-sm font-bold text-brand-purple hover:underline cursor-pointer px-2">Update</button>
                </div>

                <a href="/dashboard/kyc" class="flex items-center justify-between p-4 border border-gray-100 rounded-xl hover:border-blue-400 hover:shadow-sm transition bg-gray-50 hover:bg-white group cursor-pointer block">
                  <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-gray-400 group-hover:text-blue-500 transition">
                      <i class="fa-solid fa-shield-halved text-lg"></i>
                    </div>
                    <div>
                      <p class="font-bold text-gray-900 text-sm">Get the Blue Tick</p>
                      <p class="text-xs text-gray-500">Verify your identity to build trust with employers.</p>
                    </div>
                  </div>
                  <span class="text-sm font-bold text-blue-500 hover:underline px-2">Verify Now</span>
                </a>
              </div>
            </div>

            <div class="lg:col-span-1 bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 flex flex-col">
              <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg font-bold text-gray-900">Suggested Jobs</h2>
                <i class="fa-solid fa-wand-magic-sparkles text-brand-purple"></i>
              </div>

              <div class="space-y-4 flex-1">
                <div class="group border border-gray-100 rounded-xl p-4 hover:border-brand-purple hover:shadow-sm transition cursor-pointer">
                  <h3 class="font-bold text-gray-900 group-hover:text-brand-purple transition leading-tight">PHP/Laravel Developer</h3>
                  <p class="text-xs text-gray-500 mb-3 mt-1">TechCorp Inc. • Remote</p>
                  <div class="flex justify-between items-center">
                    <span class="text-xs font-semibold text-gray-700 bg-gray-100 px-2 py-1 rounded">80k - 120k</span>
                    <button class="text-xs font-bold text-brand-purple hover:underline">Apply &rarr;</button>
                  </div>
                </div>

                <div class="group border border-gray-100 rounded-xl p-4 hover:border-brand-purple hover:shadow-sm transition cursor-pointer">
                  <h3 class="font-bold text-gray-900 group-hover:text-brand-purple transition leading-tight">Backend Intern</h3>
                  <p class="text-xs text-gray-500 mb-3 mt-1">StartupHub • Islamabad</p>
                  <div class="flex justify-between items-center">
                    <span class="text-xs font-semibold text-gray-700 bg-gray-100 px-2 py-1 rounded">Stipend</span>
                    <button class="text-xs font-bold text-brand-purple hover:underline">Apply &rarr;</button>
                  </div>
                </div>

                <div class="group border border-gray-100 rounded-xl p-4 hover:border-brand-purple hover:shadow-sm transition cursor-pointer">
                  <h3 class="font-bold text-gray-900 group-hover:text-brand-purple transition leading-tight">Full Stack Web Dev</h3>
                  <p class="text-xs text-gray-500 mb-3 mt-1">Creative Agency • Hybrid</p>
                  <div class="flex justify-between items-center">
                    <span class="text-xs font-semibold text-gray-700 bg-gray-100 px-2 py-1 rounded">Project based</span>
                    <button class="text-xs font-bold text-brand-purple hover:underline">Apply &rarr;</button>
                  </div>
                </div>
              </div>

              <button class="w-full mt-5 py-2.5 border border-gray-200 text-gray-600 text-sm font-bold rounded-lg hover:bg-purple-50 hover:text-brand-purple hover:border-purple-200 transition cursor-pointer">
                See all matches
              </button>
            </div>
          </div>
        </div>

        <div id="section-profile-info" class="dashboard-section space-y-6 hidden">
  <div>
    <h1 class="text-2xl font-bold text-gray-900">Edit Profile Information</h1>
    <p class="text-gray-500 text-sm mt-1">Update your personal details, banner, and digital footprint.</p>
  </div>

  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
    <form id="form-cover-photo" enctype="multipart/form-data">
      @csrf
      <div class="mb-2 border-gray-100">
        <div class="flex justify-between items-end mb-2">
          <h3 class="font-bold text-gray-900 text-sm">Cover Photo</h3>
          <button type="submit" class="text-xs bg-brand-purple text-white px-3 py-1.5 rounded hover:bg-brand-dark transition cursor-pointer">Upload Cover</button>
        </div>
        <div class="relative group cursor-pointer w-full h-32 md:h-40 rounded-xl overflow-hidden bg-gradient-to-r from-brand-purple to-purple-400 border border-gray-200">
          <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition duration-200">
            <i class="fa-solid fa-camera text-white text-2xl mb-1"></i>
            <span class="text-white text-sm font-medium">Change Cover Photo</span>
          </div>
          <input type="file" name="cover_photo" id="input-cover-photo" class="absolute inset-0 opacity-0 cursor-pointer w-full h-full" accept="image/jpeg, image/png" />
        </div>
        <p id="error-cover-photo" class="text-red-500 text-xs mt-2 hidden"></p>
      </div>
    </form>
  </div>

  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
    <div class="flex items-center gap-5">
      <form id="form-avatar" enctype="multipart/form-data" class="flex items-center gap-5 w-full">
        @csrf
        <div class="relative group cursor-pointer w-20 h-20 rounded-full overflow-hidden border-2 border-gray-200 shrink-0">
          <img src="https://ui-avatars.com/api/?name=User&background=f3e8ff&color=6300B3&size=150" alt="Avatar" id="display-avatar" class="w-full h-full object-cover" />
          <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
            <i class="fa-solid fa-camera text-white"></i>
          </div>
          <input type="file" name="avatar_photo" id="input-avatar" class="absolute inset-0 opacity-0 cursor-pointer w-full h-full" accept="image/jpeg, image/png" />
        </div>
        <div>
          <h3 class="font-bold text-gray-900 text-sm">Profile Picture</h3>
          <p class="text-xs text-gray-500 mb-2">PNG, JPG up to 2MB</p>
          <div class="flex gap-2">
            <button type="submit" class="text-xs font-semibold bg-brand-purple text-white px-3 py-1.5 rounded hover:bg-brand-dark transition cursor-pointer">Upload Avatar</button>
            <button type="button" id="btn-remove-avatar" class="text-xs font-semibold text-red-500 hover:text-red-700 transition cursor-pointer">Remove photo</button>
          </div>
          <p id="error-avatar-photo" class="text-red-500 text-xs mt-2 hidden"></p>
        </div>
      </form>
    </div>
  </div>

  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
    <form id="form-general-info" class="space-y-6">
      @csrf
      <div class="grid grid-cols-1 md:grid-cols-2 gap-5 pt-2">
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-1">Professional Headline *</label>
          <input type="text" name="professional_headline" id="info-headline" placeholder="Backend PHP & Laravel Developer" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition" />
          <p id="error-info-headline" class="text-red-500 text-xs mt-1 hidden"></p>
        </div>

        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-1">Availability Status</label>
          <select name="availability_status" id="info-status" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition">
            <option value="">Select Status</option>
            <option value="Actively Looking">Actively Looking</option>
            <option value="Available for Internship">Available for Internship</option>
            <option value="Not Looking">Not Looking</option>
          </select>
          <p id="error-info-status" class="text-red-500 text-xs mt-1 hidden"></p>
        </div>

        <div class="md:col-span-2">
          <label class="block text-sm font-semibold text-gray-700 mb-1">Location</label>
          <input type="text" name="location" id="info-location" placeholder="Islamabad, Pakistan" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition" />
          <p id="error-info-location" class="text-red-500 text-xs mt-1 hidden"></p>
        </div>
      </div>

      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1">About Me (Bio)</label>
        <textarea name="about_me" id="info-bio" rows="4" placeholder="Passionate developer..." class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition resize-none"></textarea>
        <p id="error-info-bio" class="text-red-500 text-xs mt-1 hidden"></p>
      </div>

      <div class="border-t border-gray-100 pt-6 mt-6">
        <h3 class="font-bold text-gray-900 text-sm mb-4">Digital Footprint</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
              <i class="fa-brands fa-linkedin text-[#0A66C2] text-lg"></i>
            </div>
            <input type="url" name="linkedin" id="info-linkedin" placeholder="https://linkedin.com/in/..." class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition" />
            <p id="error-info-linkedin" class="text-red-500 text-xs mt-1 hidden"></p>
          </div>

          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
              <i class="fa-brands fa-github text-gray-800 text-lg"></i>
            </div>
            <input type="url" name="github" id="info-github" placeholder="https://github.com/..." class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition" />
            <p id="error-info-github" class="text-red-500 text-xs mt-1 hidden"></p>
          </div>
          
          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
              <i class="fa-brands fa-facebook text-[#1877F2] text-lg"></i>
            </div>
            <input type="url" name="facebook" id="info-facebook" placeholder="https://facebook.com/..." class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition" />
            <p id="error-info-facebook" class="text-red-500 text-xs mt-1 hidden"></p>
          </div>

          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
              <i class="fa-brands fa-instagram text-[#E4405F] text-lg"></i>
            </div>
            <input type="url" name="instagram" id="info-instagram" placeholder="https://instagram.com/..." class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition" />
            <p id="error-info-instagram" class="text-red-500 text-xs mt-1 hidden"></p>
          </div>
        </div>
      </div>

      <div class="pt-4 flex justify-end">
        <button type="submit" class="w-full sm:w-auto px-8 py-3 bg-brand-purple text-white font-bold rounded-lg shadow-md hover:bg-brand-dark transition transform active:scale-[0.98]">Save General Info</button>
      </div>
    </form>
  </div>

  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
    <form id="form-resume" enctype="multipart/form-data">
      @csrf
      <div class="flex justify-between items-end mb-2">
        <label class="block text-sm font-semibold text-gray-700">Update Resume (PDF only)</label>
        <button type="submit" class="text-xs bg-brand-purple text-white px-3 py-1.5 rounded hover:bg-brand-dark transition cursor-pointer">Upload Resume</button>
      </div>
      <div class="relative group cursor-pointer">
        <input type="file" name="resume" id="input-resume" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" accept="application/pdf" />
        <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center group-hover:border-brand-purple group-hover:bg-purple-50 transition duration-200">
          <i class="fa-solid fa-file-pdf text-3xl text-gray-400 group-hover:text-brand-purple mb-2 transition"></i>
          <p class="text-sm font-medium text-brand-purple">Click to upload new resume <span class="text-gray-500 font-normal">or drag and drop</span></p>
          <p id="display-resume-name" class="text-xs text-gray-400 mt-1">No file selected.</p>
        </div>
      </div>
      <p id="error-resume" class="text-red-500 text-xs mt-2 hidden"></p>
    </form>
  </div>
</div>

        <div id="section-applications" class="dashboard-section space-y-6 hidden">
          <h1 class="text-2xl font-bold text-gray-900 mb-6">My Applications</h1>
          <div class="space-y-4">
            <div class="bg-white rounded-xl shadow-sm border border-green-200 p-5 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 relative overflow-hidden">
              <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-green-500"></div>
              <div class="pl-2">
                <h3 class="font-bold text-gray-900 text-lg">PHP Backend Developer Intern</h3>
                <p class="text-sm text-gray-500">Tech Solutions Inc. • Applied on: Jan 10, 2026</p>
              </div>
              <span class="bg-green-100 text-green-700 border border-green-200 text-sm font-bold px-4 py-1.5 rounded-full flex items-center gap-2">
                <i class="fa-solid fa-party-horn"></i> Hired!
              </span>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 relative overflow-hidden hover:border-blue-300 transition">
              <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-blue-500"></div>
              <div class="pl-2">
                <h3 class="font-bold text-gray-900 text-lg">Junior Laravel Developer</h3>
                <p class="text-sm text-gray-500">Devsinc • Applied on: Feb 14, 2026</p>
              </div>
              <span class="bg-blue-50 text-blue-700 border border-blue-200 text-sm font-bold px-4 py-1.5 rounded-full flex items-center gap-2">
                <i class="fa-solid fa-calendar-check"></i> Shortlisted for Interview
              </span>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 relative overflow-hidden">
              <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-yellow-400"></div>
              <div class="pl-2">
                <h3 class="font-bold text-gray-900 text-lg">Backend API Engineer</h3>
                <p class="text-sm text-gray-500">System Limited • Applied on: Feb 25, 2026</p>
              </div>
              <span class="bg-yellow-50 text-yellow-700 border border-yellow-200 text-sm font-bold px-4 py-1.5 rounded-full flex items-center gap-2">
                <i class="fa-solid fa-hourglass-half"></i> Under Review
              </span>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 relative overflow-hidden opacity-75">
              <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-red-500"></div>
              <div class="pl-2">
                <h3 class="font-bold text-gray-900 text-lg">Senior PHP Dev</h3>
                <p class="text-sm text-gray-500">Google • Applied on: Dec 1, 2025</p>
              </div>
              <span class="bg-red-50 text-red-700 border border-red-200 text-sm font-bold px-4 py-1.5 rounded-full flex items-center gap-2">
                <i class="fa-solid fa-circle-xmark"></i> Not Selected
              </span>
            </div>
          </div>
        </div>

        <div id="section-experience" class="dashboard-section space-y-6 hidden">
          <div class="flex justify-between items-center mb-6">
            <div>
              <h1 class="text-2xl font-bold text-gray-900">Experience</h1>
              <p class="text-gray-500 text-sm mt-1">Showcase your career history and internships.</p>
            </div>
            <button onclick="toggleExperienceForm()" class="px-5 py-2.5 bg-brand-purple text-white text-sm font-bold rounded-lg shadow-md hover:bg-brand-dark transition cursor-pointer flex items-center gap-2">
               Add Experience
            </button>
          </div>

          <div id="experience-list" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 space-y-8">
          </div>

          <div id="experience-form-container" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 hidden">
            <h2 id="exp-form-title" class="text-xl font-bold text-gray-900 mb-5 border-b border-gray-100 pb-3">Add Experience</h2>

            <form id="experience-form" class="space-y-5">
              <input type="hidden" id="exp_id"> 
              <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1">Job Title *</label>
                  <input type="text" id="exp_title" name="title" placeholder="e.g. Backend Developer" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50">
                  <span class="text-red-500 text-xs mt-1 err-msg" id="err_title"></span>
                </div>
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1">Company Name *</label>
                  <input type="text" id="exp_company" name="company" placeholder="e.g. Tech Solutions Inc." class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50">
                  <span class="text-red-500 text-xs mt-1 err-msg" id="err_company"></span>
                </div>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1">Employment Type *</label>
                  <select id="exp_jobType" name="jobType" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50">
                    <option value="" disabled selected>Select Type</option>
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>
                    <option value="Internship">Internship</option>
                    <option value="Freelance">Freelance</option>
                    <option value="contract">Contract</option>
                  </select>
                  <span class="text-red-500 text-xs mt-1 err-msg" id="err_jobType"></span>
                </div>
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1">Location</label>
                  <input type="text" id="exp_location" name="location" placeholder="e.g. Islamabad, Pakistan" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50">
                  <span class="text-red-500 text-xs mt-1 err-msg" id="err_location"></span>
                </div>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-5 border-t border-gray-100 pt-5">
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1">Start Date *</label>
                  <div class="flex gap-2">
                    <select id="exp_start_month" name="start_month" class="w-1/2 border border-gray-300 rounded-lg px-3 py-2.5 bg-gray-50">
                      <option value="">Month</option>
                      <option>Jan</option><option>Feb</option><option>Mar</option><option>Apr</option>
                      <option>May</option><option>Jun</option><option>Jul</option><option>Aug</option>
                      <option>Sep</option><option>Oct</option><option>Nov</option><option>Dec</option>
                    </select>
                    <select id="exp_start_year" name="start_year" class="w-1/2 border border-gray-300 rounded-lg px-3 py-2.5 bg-gray-50">
                      <option value="">Year</option>
                      <option>2026</option><option>2025</option><option>2024</option><option>2023</option>
                    </select>
                  </div>
                  <span class="text-red-500 text-xs mt-1 err-msg" id="err_start_month"></span>
                </div>
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1">End Date</label>
                  <div class="flex gap-2 mb-2">
                    <select id="exp_end_month" name="end_month" class="w-1/2 border border-gray-300 rounded-lg px-3 py-2.5 bg-gray-50 disabled:opacity-50">
                      <option value="">Month</option>
                      <option>Jan</option><option>Feb</option><option>Mar</option>
                    </select>
                    <select id="exp_end_year" name="end_year" class="w-1/2 border border-gray-300 rounded-lg px-3 py-2.5 bg-gray-50 disabled:opacity-50">
                      <option value="">Year</option>
                      <option>2026</option><option>2025</option><option>2024</option>
                    </select>
                  </div>
                  <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer">
                    <input type="checkbox" id="exp_current" onchange="toggleEndDate(this)" class="rounded text-brand-purple w-4 h-4">
                    I currently work here
                  </label>
                </div>
              </div>

              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Description</label>
                <textarea id="exp_description" name="description" rows="4" class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-gray-50 resize-none"></textarea>
                <span class="text-red-500 text-xs mt-1 err-msg" id="err_description"></span>
              </div>

              <div class="pt-4 flex flex-col sm:flex-row gap-3 justify-end border-t border-gray-100">
                <button type="button" onclick="cancelExperienceForm()" class="px-6 py-2.5 border border-gray-300 text-gray-700 font-bold rounded-lg hover:border-gray-400 transition cursor-pointer">Cancel</button>
                <button type="submit" class="px-6 py-2.5 bg-brand-purple text-white font-bold rounded-lg hover:bg-brand-dark transition shadow-md cursor-pointer">Save Experience</button>
              </div>
            </form>
          </div>
        </div>

        <div id="section-education" class="dashboard-section space-y-6 hidden">
          <div class="flex justify-between items-center mb-6">
            <div>
              <h1 class="text-2xl font-bold text-gray-900">Education</h1>
              <p class="text-gray-500 text-sm mt-1">Add your academic background and qualifications.</p>
            </div>
            <button onclick="openEducationAddForm()" class="px-5 py-2.5 bg-brand-purple text-white text-sm font-bold rounded-lg shadow-md hover:bg-brand-dark transition cursor-pointer flex items-center gap-2">
              Add Education
            </button>
          </div>

          <div id="education-list" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 block">
            <div id="education-timeline" class="relative border-l-2 border-gray-100 ml-3 space-y-10">
            </div>
          </div>

          <div id="education-form-container" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 hidden">
            <h2 id="edu-form-heading" class="text-xl font-bold text-gray-900 mb-5 border-b border-gray-100 pb-3">Education Details</h2>

            <form id="education-form" class="space-y-5">
              <input type="hidden" name="id" id="edu-field-id">

              <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1">Degree / Certificate *</label>
                  <input type="text" name="name" id="edu-name" placeholder="e.g. BS Computer Science" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition" />
                  <p class="edu-error text-xs text-red-500 mt-1 hidden" id="error-edu-name"></p>
                </div>
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1">Institution / University *</label>
                  <input type="text" name="institute" id="edu-institute" placeholder="e.g. National University" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition" />
                  <p class="edu-error text-xs text-red-500 mt-1 hidden" id="error-edu-institute"></p>
                </div>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1">Start Year *</label>
                  <select name="start" id="edu-start" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition">
                    <option value="" disabled selected>Select Year</option>
                  </select>
                  <p class="edu-error text-xs text-red-500 mt-1 hidden" id="error-edu-start"></p>
                </div>
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1">End Year (or expected) *</label>
                  <select name="completed" id="edu-completed" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition">
                    <option value="" disabled selected>Select Year</option>
                  </select>
                  <p class="edu-error text-xs text-red-500 mt-1 hidden" id="error-edu-completed"></p>
                </div>
              </div>

              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Description (Optional)</label>
                <textarea rows="3" name="description" id="edu-description" placeholder="Extracurriculars, core subjects, or awards..." class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition resize-none"></textarea>
                <p class="edu-error text-xs text-red-500 mt-1 hidden" id="error-edu-description"></p>
              </div>

              <div class="pt-4 flex flex-col sm:flex-row gap-3 justify-end border-t border-gray-100 mt-6">
                <button type="button" onclick="cancelEducationForm()" class="px-6 py-2.5 border border-gray-300 text-gray-700 font-bold rounded-lg hover:border-gray-400 transition cursor-pointer order-2 sm:order-1">
                  Cancel
                </button>
                <button type="submit" class="px-6 py-2.5 bg-brand-purple text-white font-bold rounded-lg hover:bg-brand-dark transition shadow-md cursor-pointer order-1 sm:order-2">
                  Save Education
                </button>
              </div>
            </form>
          </div>
        </div>

        <div id="section-projects" class="dashboard-section space-y-6 hidden">
          <div class="flex justify-between items-center mb-6">
            <div>
              <h1 class="text-2xl font-bold text-gray-900">Projects</h1>
              <p class="text-gray-500 text-sm mt-1">Showcase your best work to stand out to employers.</p>
            </div>
            <button onclick="openAddForm()" class="px-5 py-2.5 bg-brand-purple text-white text-sm font-bold rounded-lg shadow-md hover:bg-brand-dark transition cursor-pointer flex items-center gap-2">
              Add Project
            </button>
          </div>

          <div id="projects-list" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 block">
            <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            </div>
          </div>

          <div id="project-form-container" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 hidden">
            <h2 id="form-heading" class="text-xl font-bold text-gray-900 mb-5 border-b border-gray-100 pb-3">Project Details</h2>

            <form id="project-form" class="space-y-5">
              <input type="hidden" name="id" id="field-id">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1">Project Title</label>
                  <input type="text" name="title" id="field-title" placeholder="E-Commerce Store" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition" />
                  <p class="error-msg text-xs text-red-500 mt-1 hidden" id="error-title"></p>
                </div>
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1">Project URL</label>
                  <input type="url" name="url" id="field-url" placeholder="https://github.com/..." class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition" />
                  <p class="error-msg text-xs text-red-500 mt-1 hidden" id="error-url"></p>
                </div>
              </div>

              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Description</label>
                <textarea rows="4" name="description" id="field-description" placeholder="What did you build?" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition resize-none"></textarea>
                <p class="error-msg text-xs text-red-500 mt-1 hidden" id="error-description"></p>
              </div>

              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Technologies Used</label>
                <input type="text" name="technologies" id="field-technologies" placeholder="PHP, Laravel, Tailwind CSS" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition" />
                <p class="error-msg text-xs text-red-500 mt-1 hidden" id="error-technologies"></p>
              </div>

              <div class="pt-4 flex flex-col sm:flex-row gap-3 justify-end border-t border-gray-100 mt-6">
                <button type="button" onclick="cancelProjectForm()" class="px-6 py-2.5 border border-gray-300 text-gray-700 font-bold rounded-lg hover:border-gray-400 transition cursor-pointer order-2 sm:order-1">
                  Cancel
                </button>
                <button type="submit" class="px-6 py-2.5 bg-brand-purple text-white font-bold rounded-lg hover:bg-brand-dark transition shadow-md cursor-pointer order-1 sm:order-2">
                  Save Project
                </button>
              </div>
            </form>
          </div>
        </div>

        <div id="section-skills" class="dashboard-section space-y-6 hidden">
          <div>
            <h1 class="text-2xl font-bold text-gray-900">Manage Skills</h1>
            <p class="text-gray-500 text-sm mt-1">
              Highlight your expertise. Candidates with 5+ skills are 3x more likely to be noticed by recruiters.
            </p>
          </div>

          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
            <form id="skill-form">
              @csrf
              <div class="relative flex items-center">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                </div>

                <input type="text" id="skill-input" name="skill" placeholder="Add Skill like Laravel, PHP, or Tailwind CSS" class="w-full border border-gray-300 rounded-xl pl-11 pr-28 py-4 focus:ring-2 focus:ring-brand-purple focus:border-brand-purple outline-none transition text-gray-700 bg-gray-50 focus:bg-white shadow-inner text-sm md:text-base" />
                <div class="absolute inset-y-0 right-1.5 flex items-center">
                  <button type="submit" class="px-5 py-2.5 bg-brand-purple text-white text-sm font-bold rounded-lg hover:bg-brand-dark transition shadow-md cursor-pointer">
                    Add Skill
                  </button>
                </div>
              </div>
              <p id="skill-error-msg" class="text-red-500 text-xs mt-2 min-h-[1.25rem]"></p>
            </form>
          </div>

          <div class="mb-4 flex justify-between items-center border-b border-gray-100 pb-3">
            <h3 class="text-gray-800 flex items-center gap-2">
              Your Skills
              <span id="skill-count-badge" class="bg-purple-100 text-brand-purple text-xs px-2.5 py-0.5 rounded-full">0</span>
            </h3>
            <button onclick="deleteAllSkills()" class="text-sm text-red-500 hover:text-red-700 font-medium transition cursor-pointer">
              Clear All
            </button>
          </div>

          <div id="skills-list-container" class="flex flex-wrap gap-3"></div>
        </div>

      </div>
    </div>
  </div>
</section>
<x-footer />
</body>
</html>