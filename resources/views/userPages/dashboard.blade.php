<x-navigationbar />
<meta name="csrf-token" content="{{ csrf_token() }}">
<section class="bg-gray-50 min-h-screen">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="flex flex-col lg:flex-row gap-8">
      <aside class="w-full lg:w-64 flex-shrink-0">
        <div
          class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4 sticky top-6"
        >
          <div class="text-center pb-4 border-b border-gray-100 mb-4">
            <img
              src="https://ui-avatars.com/api/?name=Anil&background=f3e8ff&color=6300B3&size=150"
              alt="Avatar"
              class="w-20 h-20 rounded-full mx-auto mb-2 object-cover border-2 border-brand-purple"
            />
            <h2 class="font-bold text-gray-900 text-lg">Anil</h2>
            <a
              href="/profile/public"
              class="text-xs text-brand-purple font-medium hover:underline"
              >View Public Profile</a
            >
          </div>

          <nav class="space-y-1" id="dashboard-nav">
            <button
              onclick="switchTab('section-home', this)"
              class="nav-btn w-full flex items-center gap-3 bg-purple-50 text-brand-purple px-4 py-3 rounded-lg font-medium transition cursor-pointer"
            >
              <i class="fa-solid fa-house w-5 text-center"></i> Dashboard Home
            </button>
            <button
              onclick="switchTab('section-profile-info', this)"
              class="nav-btn w-full flex items-center gap-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-4 py-3 rounded-lg font-medium transition cursor-pointer"
            >
              <i class="fa-solid fa-user-pen w-5 text-center"></i> Edit Profile
              Info
            </button>
            <button
              onclick="switchTab('section-experience', this)"
              class="nav-btn w-full flex items-center gap-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-4 py-3 rounded-lg font-medium transition cursor-pointer"
            >
              <i class="fa-solid fa-briefcase w-5 text-center"></i> Experience
            </button>
            <button
              onclick="switchTab('section-education', this)"
              class="nav-btn w-full flex items-center gap-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-4 py-3 rounded-lg font-medium transition cursor-pointer"
            >
              <i class="fa-solid fa-graduation-cap w-5 text-center"></i>
              Education
            </button>
            <button
              onclick="switchTab('section-projects', this)"
              class="nav-btn w-full flex items-center gap-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-4 py-3 rounded-lg font-medium transition cursor-pointer"
            >
              <i class="fa-solid fa-code w-5 text-center"></i> Projects
            </button>
            <button
              onclick="switchTab('section-skills', this)"
              class="nav-btn w-full flex items-center gap-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-4 py-3 rounded-lg font-medium transition cursor-pointer"
            >
              <i class="fa-solid fa-tags w-5 text-center"></i> Skills
            </button>
            <button
              onclick="switchTab('section-applications', this)"
              class="nav-btn w-full flex items-center gap-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-4 py-3 rounded-lg font-medium transition mt-4 pt-4 border-t border-gray-100 cursor-pointer"
            >
              <i class="fa-solid fa-paper-plane w-5 text-center"></i> My
              Applications
            </button>
          </nav>
        </div>
      </aside>

      <div class="flex-1">
        <div id="section-home" class="dashboard-section space-y-6 block">
          <div
            class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-2 gap-4"
          >
            <div>
              <h1 class="text-2xl md:text-3xl font-bold text-gray-900">
                Welcome back, Anil! <span class="text-brand-purple">👋</span>
              </h1>
              <p class="text-gray-500 text-sm mt-1">
                Here is what's happening with your profile today.
              </p>
            </div>
            <a
              href="/jobs"
              class="px-5 py-2.5 bg-white border border-gray-200 text-gray-700 font-semibold rounded-lg shadow-sm hover:bg-gray-50 hover:text-brand-purple transition cursor-pointer flex items-center gap-2 text-sm"
            >
              <i class="fa-solid fa-magnifying-glass"></i> Explore Jobs
            </a>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div
              class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex items-center gap-4 hover:border-blue-200 transition cursor-default"
            >
              <div
                class="w-12 h-12 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center text-xl shrink-0"
              >
                <i class="fa-solid fa-eye"></i>
              </div>
              <div>
                <p class="text-2xl font-bold text-gray-900">42</p>
                <p
                  class="text-xs text-gray-500 font-medium uppercase tracking-wide"
                >
                  Profile Views
                </p>
              </div>
            </div>
            <div
              class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex items-center gap-4 hover:border-purple-200 transition cursor-default"
            >
              <div
                class="w-12 h-12 bg-purple-50 text-brand-purple rounded-lg flex items-center justify-center text-xl shrink-0"
              >
                <i class="fa-solid fa-paper-plane"></i>
              </div>
              <div>
                <p class="text-2xl font-bold text-gray-900">12</p>
                <p
                  class="text-xs text-gray-500 font-medium uppercase tracking-wide"
                >
                  Jobs Applied
                </p>
              </div>
            </div>
            <div
              class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex items-center gap-4 hover:border-green-200 transition cursor-default"
            >
              <div
                class="w-12 h-12 bg-green-50 text-green-600 rounded-lg flex items-center justify-center text-xl shrink-0"
              >
                <i class="fa-solid fa-handshake"></i>
              </div>
              <div>
                <p class="text-2xl font-bold text-gray-900">2</p>
                <p
                  class="text-xs text-gray-500 font-medium uppercase tracking-wide"
                >
                  Interviews
                </p>
              </div>
            </div>
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 pt-2">
            <div
              class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8"
            >
              <div class="flex justify-between items-center mb-3">
                <h2 class="text-lg font-bold text-gray-900">
                  Profile Strength: <span class="text-brand-purple">85%</span>
                </h2>
                <span
                  class="bg-purple-50 text-brand-purple text-xs font-bold px-3 py-1 rounded-full border border-purple-100"
                  >All-Star</span
                >
              </div>

              <div class="w-full bg-gray-100 rounded-full h-2 mb-8">
                <div
                  class="bg-brand-purple h-2 rounded-full"
                  style="width: 85%"
                ></div>
              </div>

              <h3 class="font-bold text-gray-800 text-sm mb-4">
                Next steps to stand out to employers:
              </h3>

              <div class="space-y-3">
                <div
                  class="flex items-center justify-between p-4 border border-gray-100 rounded-xl hover:border-brand-purple hover:shadow-sm transition bg-gray-50 hover:bg-white group cursor-pointer"
                  onclick="
                    switchTab(
                      'section-profile-info',
                      document.querySelectorAll('.nav-btn')[1],
                    )
                  "
                >
                  <div class="flex items-center gap-4">
                    <div
                      class="w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-gray-400 group-hover:text-brand-purple transition"
                    >
                      <i class="fa-brands fa-github text-lg"></i>
                    </div>
                    <div>
                      <p class="font-bold text-gray-900 text-sm">
                        Add your GitHub link
                      </p>
                      <p class="text-xs text-gray-500">
                        Recruiters want to see your code repositories.
                      </p>
                    </div>
                  </div>
                  <button
                    class="text-sm font-bold text-brand-purple hover:underline cursor-pointer px-2"
                  >
                    Add Link
                  </button>
                </div>

                <div
                  class="flex items-center justify-between p-4 border border-gray-100 rounded-xl hover:border-brand-purple hover:shadow-sm transition bg-gray-50 hover:bg-white group cursor-pointer"
                  onclick="
                    switchTab(
                      'section-experience',
                      document.querySelectorAll('.nav-btn')[2],
                    )
                  "
                >
                  <div class="flex items-center gap-4">
                    <div
                      class="w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-gray-400 group-hover:text-brand-purple transition"
                    >
                      <i class="fa-solid fa-briefcase text-lg"></i>
                    </div>
                    <div>
                      <p class="font-bold text-gray-900 text-sm">
                        Update your experience
                      </p>
                      <p class="text-xs text-gray-500">
                        Candidates with 2+ roles get 4x more profile views.
                      </p>
                    </div>
                  </div>
                  <button
                    class="text-sm font-bold text-brand-purple hover:underline cursor-pointer px-2"
                  >
                    Update
                  </button>
                </div>

                <a
                  href="/dashboard/kyc"
                  class="flex items-center justify-between p-4 border border-gray-100 rounded-xl hover:border-blue-400 hover:shadow-sm transition bg-gray-50 hover:bg-white group cursor-pointer block"
                >
                  <div class="flex items-center gap-4">
                    <div
                      class="w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-gray-400 group-hover:text-blue-500 transition"
                    >
                      <i class="fa-solid fa-shield-halved text-lg"></i>
                    </div>
                    <div>
                      <p class="font-bold text-gray-900 text-sm">
                        Get the Blue Tick
                      </p>
                      <p class="text-xs text-gray-500">
                        Verify your identity to build trust with employers.
                      </p>
                    </div>
                  </div>
                  <span
                    class="text-sm font-bold text-blue-500 hover:underline px-2"
                    >Verify Now</span
                  >
                </a>
              </div>
            </div>

            <div
              class="lg:col-span-1 bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 flex flex-col"
            >
              <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg font-bold text-gray-900">Suggested Jobs</h2>
                <i
                  class="fa-solid fa-wand-magic-sparkles text-brand-purple"
                ></i>
              </div>

              <div class="space-y-4 flex-1">
                <div
                  class="group border border-gray-100 rounded-xl p-4 hover:border-brand-purple hover:shadow-sm transition cursor-pointer"
                >
                  <h3
                    class="font-bold text-gray-900 group-hover:text-brand-purple transition leading-tight"
                  >
                    PHP/Laravel Developer
                  </h3>
                  <p class="text-xs text-gray-500 mb-3 mt-1">
                    TechCorp Inc. • Remote
                  </p>
                  <div class="flex justify-between items-center">
                    <span
                      class="text-xs font-semibold text-gray-700 bg-gray-100 px-2 py-1 rounded"
                      >80k - 120k</span
                    >
                    <button
                      class="text-xs font-bold text-brand-purple hover:underline"
                    >
                      Apply &rarr;
                    </button>
                  </div>
                </div>

                <div
                  class="group border border-gray-100 rounded-xl p-4 hover:border-brand-purple hover:shadow-sm transition cursor-pointer"
                >
                  <h3
                    class="font-bold text-gray-900 group-hover:text-brand-purple transition leading-tight"
                  >
                    Backend Intern
                  </h3>
                  <p class="text-xs text-gray-500 mb-3 mt-1">
                    StartupHub • Islamabad
                  </p>
                  <div class="flex justify-between items-center">
                    <span
                      class="text-xs font-semibold text-gray-700 bg-gray-100 px-2 py-1 rounded"
                      >Stipend</span
                    >
                    <button
                      class="text-xs font-bold text-brand-purple hover:underline"
                    >
                      Apply &rarr;
                    </button>
                  </div>
                </div>

                <div
                  class="group border border-gray-100 rounded-xl p-4 hover:border-brand-purple hover:shadow-sm transition cursor-pointer"
                >
                  <h3
                    class="font-bold text-gray-900 group-hover:text-brand-purple transition leading-tight"
                  >
                    Full Stack Web Dev
                  </h3>
                  <p class="text-xs text-gray-500 mb-3 mt-1">
                    Creative Agency • Hybrid
                  </p>
                  <div class="flex justify-between items-center">
                    <span
                      class="text-xs font-semibold text-gray-700 bg-gray-100 px-2 py-1 rounded"
                      >Project based</span
                    >
                    <button
                      class="text-xs font-bold text-brand-purple hover:underline"
                    >
                      Apply &rarr;
                    </button>
                  </div>
                </div>
              </div>

              <button
                class="w-full mt-5 py-2.5 border border-gray-200 text-gray-600 text-sm font-bold rounded-lg hover:bg-purple-50 hover:text-brand-purple hover:border-purple-200 transition cursor-pointer"
              >
                See all matches
              </button>
            </div>
          </div>
        </div>
        <div
          id="section-profile-info"
          class="dashboard-section space-y-6 hidden"
        >
          <div>
            <h1 class="text-2xl font-bold text-gray-900">Edit Profile</h1>
            <p class="text-gray-500 text-sm mt-1">
              Update your personal details, banner, and digital footprint.
            </p>
          </div>

          <div
            class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8"
          >
            <form class="space-y-6">
              <div class="mb-6 border-b border-gray-100 pb-8">
                <div class="flex justify-between items-end mb-2">
                  <h3 class="font-bold text-gray-900 text-sm">Cover Photo</h3>
                  <p class="text-xs text-gray-500">Recommended: 1200 x 300px</p>
                </div>
                <div
                  class="relative group cursor-pointer w-full h-32 md:h-40 rounded-xl overflow-hidden bg-gradient-to-r from-brand-purple to-purple-400 border border-gray-200"
                >
                  <div
                    class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition duration-200"
                  >
                    <i class="fa-solid fa-camera text-white text-2xl mb-1"></i>
                    <span class="text-white text-sm font-medium"
                      >Change Cover Photo</span
                    >
                  </div>
                  <input
                    type="file"
                    class="absolute inset-0 opacity-0 cursor-pointer w-full h-full"
                    accept="image/jpeg, image/png"
                  />
                </div>
              </div>

              <div
                class="flex items-center gap-5 pb-8 border-b border-gray-100"
              >
                <div
                  class="relative group cursor-pointer w-20 h-20 rounded-full overflow-hidden border-2 border-gray-200 shrink-0"
                >
                  <img
                    src="https://ui-avatars.com/api/?name=Anil&background=f3e8ff&color=6300B3&size=150"
                    alt="Avatar"
                    class="w-full h-full object-cover"
                  />
                  <div
                    class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition"
                  >
                    <i class="fa-solid fa-camera text-white"></i>
                  </div>
                  <input
                    type="file"
                    class="absolute inset-0 opacity-0 cursor-pointer w-full h-full"
                    accept="image/jpeg, image/png"
                  />
                </div>
                <div>
                  <h3 class="font-bold text-gray-900 text-sm">
                    Profile Picture
                  </h3>
                  <p class="text-xs text-gray-500 mb-2">PNG, JPG up to 2MB</p>
                  <button
                    type="button"
                    class="text-xs font-semibold text-red-500 hover:text-red-700 transition cursor-pointer"
                  >
                    Remove photo
                  </button>
                </div>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-5 pt-2">
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1"
                    >Full Name *</label
                  >
                  <input
                    type="text"
                    value="Anil"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition"
                  />
                </div>
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1"
                    >Professional Headline *</label
                  >
                  <input
                    type="text"
                    value="Backend PHP & Laravel Developer"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition"
                  />
                </div>
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1"
                    >Email Address *</label
                  >
                  <input
                    type="email"
                    value="anil@example.com"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition"
                    readonly
                  />
                  <p class="text-[10px] text-gray-400 mt-1">
                    Email cannot be changed directly.
                  </p>
                </div>
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1"
                    >Phone Number</label
                  >
                  <input
                    type="tel"
                    value="+92 300 1234567"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition"
                  />
                </div>
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1"
                    >Availability Status</label
                  >
                  <select
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition"
                  >
                    <option>Actively Looking</option>
                    <option selected>Available for Internship</option>
                    <option>Not Looking</option>
                  </select>
                </div>
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-1"
                    >Location</label
                  >
                  <input
                    type="text"
                    value="Islamabad, Pakistan"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition"
                  />
                </div>
              </div>

              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1"
                  >About Me (Bio)</label
                >
                <textarea
                  rows="4"
                  class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition resize-none"
                >
Passionate backend developer with a strong focus on PHP and Laravel. I enjoy building secure REST APIs and clean, responsive user interfaces using Tailwind CSS.</textarea
                >
              </div>

              <div class="border-t border-gray-100 pt-6 mt-6">
                <h3 class="font-bold text-gray-900 text-sm mb-4">
                  Digital Footprint
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                  <div class="relative">
                    <div
                      class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none"
                    >
                      <i
                        class="fa-brands fa-linkedin text-[#0A66C2] text-lg"
                      ></i>
                    </div>
                    <input
                      type="url"
                      placeholder="linkedin.com/in/username"
                      value="linkedin.com/in/anil"
                      class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition"
                    />
                  </div>

                  <div class="relative">
                    <div
                      class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none"
                    >
                      <i class="fa-brands fa-github text-gray-800 text-lg"></i>
                    </div>
                    <input
                      type="url"
                      placeholder="github.com/username"
                      value="github.com/anil-dev"
                      class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition"
                    />
                  </div>

                  <div class="relative">
                    <div
                      class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none"
                    >
                      <i
                        class="fa-brands fa-facebook text-[#1877F2] text-lg"
                      ></i>
                    </div>
                    <input
                      type="url"
                      placeholder="facebook.com/username"
                      class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition"
                    />
                  </div>

                  <div class="relative">
                    <div
                      class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none"
                    >
                      <i
                        class="fa-brands fa-instagram text-[#E4405F] text-lg"
                      ></i>
                    </div>
                    <input
                      type="url"
                      placeholder="instagram.com/username"
                      class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-2.5 focus:ring-2 focus:ring-brand-purple focus:outline-none bg-gray-50 focus:bg-white transition"
                    />
                  </div>
                </div>
              </div>

              <div class="border-t border-gray-100 pt-6 mt-6">
                <label class="block text-sm font-semibold text-gray-700 mb-2"
                  >Update Resume (PDF only)</label
                >
                <div class="relative group cursor-pointer">
                  <input
                    type="file"
                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
                    accept="application/pdf"
                  />
                  <div
                    class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center group-hover:border-brand-purple group-hover:bg-purple-50 transition duration-200"
                  >
                    <i
                      class="fa-solid fa-file-pdf text-3xl text-gray-400 group-hover:text-brand-purple mb-2 transition"
                    ></i>
                    <p class="text-sm font-medium text-brand-purple">
                      Click to upload new resume
                      <span class="text-gray-500 font-normal"
                        >or drag and drop</span
                      >
                    </p>
                    <p class="text-xs text-gray-400 mt-1">
                      Currently uploaded: anil_cv_2026.pdf
                    </p>
                  </div>
                </div>
              </div>

              <div class="pt-4 flex justify-end">
                <button
                  type="submit"
                  class="w-full sm:w-auto px-8 py-3 bg-brand-purple text-white font-bold rounded-lg shadow-md hover:bg-brand-dark transition transform active:scale-[0.98] cursor-pointer"
                >
                  Save Changes
                </button>
              </div>
            </form>
          </div>
        </div>
        <div
          id="section-applications"
          class="dashboard-section space-y-6 hidden"
        >
          <h1 class="text-2xl font-bold text-gray-900 mb-6">My Applications</h1>

          <div class="space-y-4">
            <div
              class="bg-white rounded-xl shadow-sm border border-green-200 p-5 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 relative overflow-hidden"
            >
              <div
                class="absolute left-0 top-0 bottom-0 w-1.5 bg-green-500"
              ></div>
              <div class="pl-2">
                <h3 class="font-bold text-gray-900 text-lg">
                  PHP Backend Developer Intern
                </h3>
                <p class="text-sm text-gray-500">
                  Tech Solutions Inc. • Applied on: Jan 10, 2026
                </p>
              </div>
              <span
                class="bg-green-100 text-green-700 border border-green-200 text-sm font-bold px-4 py-1.5 rounded-full flex items-center gap-2"
              >
                <i class="fa-solid fa-party-horn"></i> Hired!
              </span>
            </div>

            <div
              class="bg-white rounded-xl shadow-sm border border-gray-200 p-5 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 relative overflow-hidden hover:border-blue-300 transition"
            >
              <div
                class="absolute left-0 top-0 bottom-0 w-1.5 bg-blue-500"
              ></div>
              <div class="pl-2">
                <h3 class="font-bold text-gray-900 text-lg">
                  Junior Laravel Developer
                </h3>
                <p class="text-sm text-gray-500">
                  Devsinc • Applied on: Feb 14, 2026
                </p>
              </div>
              <span
                class="bg-blue-50 text-blue-700 border border-blue-200 text-sm font-bold px-4 py-1.5 rounded-full flex items-center gap-2"
              >
                <i class="fa-solid fa-calendar-check"></i> Shortlisted for
                Interview
              </span>
            </div>

            <div
              class="bg-white rounded-xl shadow-sm border border-gray-200 p-5 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 relative overflow-hidden"
            >
              <div
                class="absolute left-0 top-0 bottom-0 w-1.5 bg-yellow-400"
              ></div>
              <div class="pl-2">
                <h3 class="font-bold text-gray-900 text-lg">
                  Backend API Engineer
                </h3>
                <p class="text-sm text-gray-500">
                  System Limited • Applied on: Feb 25, 2026
                </p>
              </div>
              <span
                class="bg-yellow-50 text-yellow-700 border border-yellow-200 text-sm font-bold px-4 py-1.5 rounded-full flex items-center gap-2"
              >
                <i class="fa-solid fa-hourglass-half"></i> Under Review
              </span>
            </div>

            <div
              class="bg-white rounded-xl shadow-sm border border-gray-200 p-5 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 relative overflow-hidden opacity-75"
            >
              <div
                class="absolute left-0 top-0 bottom-0 w-1.5 bg-red-500"
              ></div>
              <div class="pl-2">
                <h3 class="font-bold text-gray-900 text-lg">Senior PHP Dev</h3>
                <p class="text-sm text-gray-500">
                  Google • Applied on: Dec 1, 2025
                </p>
              </div>
              <span
                class="bg-red-50 text-red-700 border border-red-200 text-sm font-bold px-4 py-1.5 rounded-full flex items-center gap-2"
              >
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
            <i class="fa-solid fa-plus"></i> Add Experience
        </button>
    </div>

    <div id="experience-list" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 space-y-8">
        </div>

    <div id="experience-form-container" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 hidden">
        <h2 id="exp-form-title" class="text-xl font-bold text-gray-900 mb-5 border-b border-gray-100 pb-3">Add Experience</h2>

        <form id="experience-form" class="space-y-5">
            <input type="hidden" id="exp_id"> <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
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

<script>
  document.addEventListener('DOMContentLoaded', () => {
    loadExperiences();

    const expForm = document.getElementById('experience-form');
    expForm.addEventListener('submit', function(e) {
        e.preventDefault();
        saveExperience();
    });
});

// Toggle end date fields based on "I currently work here"
function toggleEndDate(checkbox) {
    const endMonth = document.getElementById('exp_end_month');
    const endYear = document.getElementById('exp_end_year');
    if (checkbox.checked) {
        endMonth.disabled = true;
        endYear.disabled = true;
        endMonth.value = "";
        endYear.value = "";
    } else {
        endMonth.disabled = false;
        endYear.disabled = false;
    }
}

// Show form for new entry
function toggleExperienceForm() {
    resetExpForm();
    document.getElementById("exp-form-title").innerText = "Add Experience";
    document.getElementById("experience-list").classList.add("hidden");
    document.getElementById("experience-form-container").classList.remove("hidden");
}

function cancelExperienceForm() {
    document.getElementById("experience-form-container").classList.add("hidden");
    document.getElementById("experience-list").classList.remove("hidden");
    resetExpForm();
}

function resetExpForm() {
    document.getElementById('experience-form').reset();
    document.getElementById('exp_id').value = "";
    document.querySelectorAll('.err-msg').forEach(el => el.innerText = "");
    toggleEndDate(document.getElementById('exp_current'));
}

// ---------------- FETCH OPERATIONS ----------------

async function loadExperiences() {
    try {
        const res = await fetch('/experience/all');
        const data = await res.json();
        const container = document.getElementById('experience-list');
        
        if (data.experiences.length === 0) {
            container.innerHTML = `<p class="text-center text-gray-400">No experience added yet.</p>`;
            return;
        }

        container.innerHTML = data.experiences.map(exp => `
            <div class="flex flex-col sm:flex-row gap-4 group">
                <div class="w-12 h-12 rounded-xl bg-purple-50 border border-purple-100 flex items-center justify-center text-brand-purple shrink-0 mt-1 transition group-hover:bg-brand-purple group-hover:text-white">
                    <i class="fa-solid fa-briefcase text-xl"></i>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-900 text-lg">${exp.title}</h3>
                    <p class="text-sm font-medium text-gray-700 mb-1">${exp.company} <span class="text-gray-400 font-normal ml-2">• ${exp.location}</span></p>
                    <p class="text-xs text-gray-500 mb-3">
                        ${exp.start_month} ${exp.start_year} - ${exp.end_year ? exp.end_month + ' ' + exp.end_year : 'Present'}
                        ${!exp.end_year ? '<span class="bg-green-100 text-green-700 text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wide ml-2">Current</span>' : ''}
                    </p>
                    <p class="text-sm text-gray-600">${exp.description}</p>
                    <div class="flex gap-3 mt-4">
                        <button onclick="deleteExperience(${exp.id})" class="px-4 py-1.5 border border-gray-300 rounded text-xs font-medium hover:border-red-500 hover:text-red-500 transition cursor-pointer">Delete</button>
                        <button onclick="editExperience(${exp.id})" class="px-4 py-1.5 border border-gray-300 rounded text-xs font-medium hover:border-brand-purple hover:text-brand-purple transition cursor-pointer">Edit</button>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-100 last:hidden"></div>
        `).join('');
    } catch (err) { console.error("Load failed", err); }
}

async function saveExperience() {
    const id = document.getElementById('exp_id').value;
    const url = id ? `/experience/edit/${id}` : '/experience/add';
    
    // Clear previous errors
    document.querySelectorAll('.err-msg').forEach(el => el.innerText = "");

    const payload = {
        title: document.getElementById('exp_title').value,
        company: document.getElementById('exp_company').value,
        jobType: document.getElementById('exp_jobType').value,
        location: document.getElementById('exp_location').value,
        start_month: document.getElementById('exp_start_month').value,
        start_year: document.getElementById('exp_start_year').value,
        end_month: document.getElementById('exp_end_month').value,
        end_year: document.getElementById('exp_end_year').value,
        description: document.getElementById('exp_description').value,
    };

    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json'
            },
            body: JSON.stringify(payload)
        });

        const result = await response.json();

        if (response.status === 422) { // Validation Error
            Object.keys(result.errors).forEach(key => {
                const errSpan = document.getElementById(`err_${key}`);
                if (errSpan) errSpan.innerText = result.errors[key][0];
            });
        } else if (result.status) {
            cancelExperienceForm();
            loadExperiences();
        }
    } catch (err) { console.error("Save failed", err); }
}

async function editExperience(id) {
    try {
        const res = await fetch(`/experience/show/${id}`);
        const data = await res.json();
        const exp = data.experience;

        document.getElementById('exp_id').value = exp.id;
        document.getElementById('exp_title').value = exp.title;
        document.getElementById('exp_company').value = exp.company;
        document.getElementById('exp_jobType').value = exp.jobType;
        document.getElementById('exp_location').value = exp.location;
        document.getElementById('exp_start_month').value = exp.start_month;
        document.getElementById('exp_start_year').value = exp.start_year;
        document.getElementById('exp_description').value = exp.description;
        
        const isCurrent = !exp.end_year;
        document.getElementById('exp_current').checked = isCurrent;
        if (!isCurrent) {
            document.getElementById('exp_end_month').value = exp.end_month;
            document.getElementById('exp_end_year').value = exp.end_year;
        }
        toggleEndDate(document.getElementById('exp_current'));

        document.getElementById("exp-form-title").innerText = "Edit Experience";
        document.getElementById("experience-list").classList.add("hidden");
        document.getElementById("experience-form-container").classList.remove("hidden");
    } catch (err) { console.error("Edit fetch failed", err); }
}

async function deleteExperience(id) {
    if (!confirm('Are you sure you want to delete this experience?')) return;
    
    try {
        const res = await fetch('/experience/delete', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ id: id })
        });
        const result = await res.json();
        if (result.status) loadExperiences();
    } catch (err) { console.error("Delete failed", err); }
}
</script>


<div id="section-education" class="dashboard-section space-y-6">
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

<script>
  const EDU_ROUTES = {
    fetch: '/education/all',
    add: '/education/add',
    show: '/education/show',
    edit: '/education/edit',
    delete: '/education/delete'
  };

  document.addEventListener('DOMContentLoaded', () => {
    fetchEducation();
    populateYears();
  });

  // Populate Year Dropdowns
  function populateYears() {
    const startSelect = document.getElementById('edu-start');
    const endSelect = document.getElementById('edu-completed');
    const currentYear = 2026;
    
    for (let i = currentYear + 5; i >= 1990; i--) {
      const opt = `<option value="${i}">${i}</option>`;
      startSelect.insertAdjacentHTML('beforeend', opt);
      endSelect.insertAdjacentHTML('beforeend', opt);
    }
  }

  async function fetchEducation() {
    try {
      const res = await fetch(EDU_ROUTES.fetch);
      const data = await res.json();
      renderEducation(data.education);
    } catch (e) { console.error("Education load failed", e); }
  }

  function renderEducation(education) {
    const timeline = document.getElementById('education-timeline');
    timeline.innerHTML = education.length ? education.map(edu => `
      <div class="relative pl-6 group">
        <div class="absolute -left-[9px] top-1 w-4 h-4 bg-white border-2 border-brand-purple rounded-full"></div>
        <h3 class="font-bold text-gray-900 text-lg">${edu.name}</h3>
        <p class="text-sm font-medium text-gray-700 mb-1">${edu.institute}</p>
        <p class="text-xs text-gray-500 mb-2">${edu.start} - ${edu.completed}</p>
        <p class="text-sm text-gray-600">${edu.description || ''}</p>
        <div class="flex gap-3 mt-4">
          <button onclick="deleteEducation(${edu.id})" class="px-4 py-1.5 border border-gray-300 rounded text-xs font-medium hover:border-red-500 hover:text-red-500 transition cursor-pointer">Delete</button>
          <button onclick="editEducationTrigger(${edu.id})" class="px-4 py-1.5 border border-gray-300 rounded text-xs font-medium hover:border-brand-purple hover:text-brand-purple transition cursor-pointer">Edit</button>
        </div>
      </div>
    `).join('') : '<p class="text-gray-400 py-4 pl-6">No education records found.</p>';
  }

  function openEducationAddForm() {
    resetEduForm();
    document.getElementById('edu-form-heading').innerText = "Add Education";
    document.getElementById("education-list").classList.add("hidden");
    document.getElementById("education-form-container").classList.remove("hidden");
  }

  async function editEducationTrigger(id) {
    resetEduForm();
    try {
      const res = await fetch(`${EDU_ROUTES.show}/${id}`);
      const data = await res.json();
      if (data.status) {
        document.getElementById('edu-field-id').value = data.education.id;
        document.getElementById('edu-name').value = data.education.name;
        document.getElementById('edu-institute').value = data.education.institute;
        document.getElementById('edu-start').value = data.education.start;
        document.getElementById('edu-completed').value = data.education.completed;
        document.getElementById('edu-description').value = data.education.description;
        
        document.getElementById('edu-form-heading').innerText = "Edit Education";
        document.getElementById("education-list").classList.add("hidden");
        document.getElementById("education-form-container").classList.remove("hidden");
      }
    } catch (e) { alert("Error fetching data"); }
  }

  function cancelEducationForm() {
    document.getElementById("education-form-container").classList.add("hidden");
    document.getElementById("education-list").classList.remove("hidden");
  }

  function resetEduForm() {
    document.getElementById('education-form').reset();
    document.querySelectorAll('.edu-error').forEach(el => el.classList.add('hidden'));
  }

  document.getElementById('education-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    const id = formData.get('id');
    const url = id ? `${EDU_ROUTES.edit}/${id}` : EDU_ROUTES.add;

    try {
      const res = await fetch(url, {
        method: 'POST',
        body: formData,
        headers: { 
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'X-Requested-With': 'XMLHttpRequest'
        }
      });

      const data = await res.json();

      if (res.status === 422) {
        Object.keys(data.errors).forEach(key => {
          const errEl = document.getElementById(`error-edu-${key}`);
          if (errEl) { errEl.innerText = data.errors[key][0]; errEl.classList.remove('hidden'); }
        });
      } else if (data.status) {
        cancelEducationForm();
        fetchEducation();
      }
    } catch (error) { console.error("Save failed", error); }
  });

  async function deleteEducation(id) {
    if (!confirm('Delete this record?')) return;
    try {
      await fetch(EDU_ROUTES.delete, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content },
        body: JSON.stringify({ id })
      });
      fetchEducation();
    } catch (e) { console.error("Delete failed"); }
  }
</script>
<div id="section-projects" class="dashboard-section space-y-6">
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

<script>
    const PROJECT_ROUTES = {
        fetch: '/projects/all',
        add: '/projects/add',
        show: '/projects/show',
        edit: '/projects/edit',
        delete: '/projects/delete'
    };

    document.addEventListener('DOMContentLoaded', fetchProjects);

    // Initial Fetch
    async function fetchProjects() {
        try {
            const res = await fetch(PROJECT_ROUTES.fetch);
            const data = await res.json();
            renderProjects(data.projects);
        } catch (e) { console.error("Load failed", e); }
    }

    function renderProjects(projects) {
        const grid = document.getElementById('projects-grid');
        grid.innerHTML = projects.length ? projects.map(p => `
            <div class="border border-gray-200 rounded-xl flex flex-col hover:border-brand-purple hover:shadow-md transition group overflow-hidden p-5">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="font-bold text-gray-900 group-hover:text-brand-purple transition text-lg leading-tight">${p.title}</h3>
                    <a href="${p.link}" target="_blank" class="text-gray-400 hover:text-brand-purple transition"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
                <p class="text-sm text-gray-500 mb-4 line-clamp-2">${p.description}</p>
                <div class="flex flex-wrap gap-2 text-xs font-medium text-gray-600 flex-1">
                    ${p.technologies.split(',').map(t => `<span class="bg-gray-100 px-2.5 py-1 rounded-md border border-gray-200">${t.trim()}</span>`).join('')}
                </div>
                <div class="flex gap-3 mt-6">
                    <button onclick="deleteProject(${p.id})" class="flex-1 py-2 border border-gray-300 rounded text-sm font-medium hover:border-red-500 hover:text-red-500 transition cursor-pointer">Delete</button>
                    <button onclick="editProjectTrigger(${p.id})" class="flex-1 py-2 bg-brand-purple text-white rounded text-sm font-medium hover:bg-brand-dark transition cursor-pointer">Edit</button>
                </div>
            </div>
        `).join('') : '<p class="col-span-full text-center text-gray-400 py-10">No projects added yet.</p>';
    }

    // Form Navigation
    function openAddForm() {
        resetForm();
        document.getElementById('form-heading').innerText = "Add New Project";
        document.getElementById("projects-list").classList.add("hidden");
        document.getElementById("project-form-container").classList.remove("hidden");
    }

    async function editProjectTrigger(id) {
        resetForm();
        try {
            const res = await fetch(`${PROJECT_ROUTES.show}/${id}`);
            const data = await res.json();
            if (data.status) {
                document.getElementById('field-id').value = data.project.id;
                document.getElementById('field-title').value = data.project.title;
                document.getElementById('field-url').value = data.project.link;
                document.getElementById('field-description').value = data.project.description;
                document.getElementById('field-technologies').value = data.project.technologies;
                
                document.getElementById('form-heading').innerText = "Edit Project";
                document.getElementById("projects-list").classList.add("hidden");
                document.getElementById("project-form-container").classList.remove("hidden");
            }
        } catch (e) { alert("Failed to fetch data"); }
    }

    function cancelProjectForm() {
        document.getElementById("project-form-container").classList.add("hidden");
        document.getElementById("projects-list").classList.remove("hidden");
    }

    function resetForm() {
        document.getElementById('project-form').reset();
        document.querySelectorAll('.error-msg').forEach(el => { el.classList.add('hidden'); el.innerText = ''; });
    }

    // Submit Logic
    document.getElementById('project-form').addEventListener('submit', async (e) => {
        e.preventDefault();
        const formData = new FormData(e.target);
        const id = formData.get('id');
        const url = id ? `${PROJECT_ROUTES.edit}/${id}` : PROJECT_ROUTES.add;

        // Clear previous errors
        document.querySelectorAll('.error-msg').forEach(el => el.classList.add('hidden'));

        try {
            const res = await fetch(url, {
                method: 'POST',
                body: formData,
                headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content, 'X-Requested-With': 'XMLHttpRequest' }
            });

            const data = await res.json();

            if (res.status === 422) { // Laravel Validation Errors
                Object.keys(data.errors).forEach(key => {
                    const errorEl = document.getElementById(`error-${key}`);
                    if (errorEl) {
                        errorEl.innerText = data.errors[key][0];
                        errorEl.classList.remove('hidden');
                    }
                });
            } else if (data.status) {
                cancelProjectForm();
                fetchProjects();
            } else {
                // Handle the custom JSON errors (like "Project title already exists")
                const errorEl = document.getElementById(`error-title`);
                errorEl.innerText = data.message;
                errorEl.classList.remove('hidden');
            }
        } catch (error) { console.error("Error saving", error); }
    });

    async function deleteProject(id) {
        
        try {
            await fetch(PROJECT_ROUTES.delete, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content },
                body: JSON.stringify({ id })
            });
            fetchProjects();
        } catch (e) { console.error("Delete failed"); }
    }
</script>

 <div id="section-skills" class="dashboard-section space-y-6 hidden">
  <div>
    <h1 class="text-2xl font-bold text-gray-900">Manage Skills</h1>
    <p class="text-gray-500 text-sm mt-1">
      Highlight your expertise. Candidates with 5+ skills are 3x more
      likely to be noticed by recruiters.
    </p>
  </div>

  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
    <form id="skill-form">
      @csrf
      <div class="relative flex items-center">
        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
          <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
        </div>

        <input
          type="text"
          id="skill-input"
          name="skill"
          placeholder="Add Skill like Laravel, PHP, or Tailwind CSS"
          class="w-full border border-gray-300 rounded-xl pl-11 pr-28 py-4 focus:ring-2 focus:ring-brand-purple focus:border-brand-purple outline-none transition text-gray-700 bg-gray-50 focus:bg-white shadow-inner text-sm md:text-base"
        />
        <div class="absolute inset-y-0 right-1.5 flex items-center">
          <button
            type="submit"
            class="px-5 py-2.5 bg-brand-purple text-white text-sm font-bold rounded-lg hover:bg-brand-dark transition shadow-md cursor-pointer"
          >
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
      <span
        id="skill-count-badge"
        class="bg-purple-100 text-brand-purple text-xs px-2.5 py-0.5 rounded-full"
      >0</span>
    </h3>
    <button
      onclick="deleteAllSkills()"
      class="text-sm text-red-500 hover:text-red-700 font-medium transition cursor-pointer"
    >
      Clear All
    </button>
  </div>

  <div id="skills-list-container" class="flex flex-wrap gap-3"></div>
</div>
    </div>
  </div>
</section>

<script>
  function switchTab(sectionId, clickedButton) {
    const sections = document.querySelectorAll(".dashboard-section");
    sections.forEach((section) => {
      section.classList.add("hidden");
      section.classList.remove("block");
    });
    const targetSection = document.getElementById(sectionId);
    targetSection.classList.remove("hidden");
    targetSection.classList.add("block");
    const navButtons = document.querySelectorAll(".nav-btn");
    navButtons.forEach((btn) => {
      btn.classList.remove("bg-purple-50", "text-brand-purple");
      btn.classList.add("text-gray-600");
    });
    clickedButton.classList.remove("text-gray-600");
    clickedButton.classList.add("bg-purple-50", "text-brand-purple");
  }

  const skillForm = document.getElementById('skill-form');
  const skillInput = document.getElementById('skill-input');
  const skillError = document.getElementById('skill-error-msg');
  const skillsContainer = document.getElementById('skills-list-container');
  const skillCountBadge = document.getElementById('skill-count-badge');

async function fetchSkills() {
  try {
    const response = await fetch("{{ route('show.skills') }}", {
      headers: { 
        'Accept': 'application/json',
        'X-Requested-With': 'XMLHttpRequest' 
      }
    });

    const data = await response.json();
    console.log("Server Response:", data); 

    if (data.skills) {
      renderSkillsList(data.skills);
    }
  } catch (err) {
    console.error("Fetch Error:", err);
  }
}

  function renderSkillsList(skills) {
    skillCountBadge.innerText = skills.length;
    if (skills.length === 0) {
      skillsContainer.innerHTML = '<p class="text-gray-400 text-sm italic">No skills added yet.</p>';
      return;
    }
    skillsContainer.innerHTML = skills.map(skill => `
      <div id="skill-item-${skill.id}" class="group flex items-center gap-2 bg-white border border-gray-200 hover:border-brand-purple hover:shadow-sm pl-4 pr-1.5 py-1.5 rounded-full transition duration-200">
        <span class="text-sm font-medium text-gray-700 group-hover:text-brand-purple transition">${skill.skill_name}</span>
        <button type="button" onclick="deleteSingleSkill(${skill.id})" class="w-7 h-7 flex items-center justify-center rounded-full text-gray-400 hover:bg-red-50 hover:text-red-500 transition duration-200 cursor-pointer">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
    `).join('');
  }

  skillForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    skillError.innerText = "";
    const token = document.querySelector('input[name="_token"]')?.value;

    try {
      const response = await fetch("{{ route('add.skill') }}", {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': token,
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ skill: skillInput.value })
      });

      const data = await response.json();

      if (response.ok && data.status) {
        skillInput.value = "";
        fetchSkills();
      } else {
        if (data.errors) {
          skillError.innerText = Object.values(data.errors)[0][0];
        } else {
          skillError.innerText = data.message || "Failed to add skill";
        }
      }
    } catch (err) {
      skillError.innerText = "Connection error. Please check your console.";
      console.error(err);
    }
  });

  async function deleteSingleSkill(id) {
    const token = document.querySelector('input[name="_token"]')?.value;
    try {
      const response = await fetch("{{ route('delete.skill') }}", {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': token,
          'Accept': 'application/json'
        },
        body: JSON.stringify({ _method: 'DELETE', id: id })
      });
      const data = await response.json();
      if (data.status) fetchSkills();
    } catch (err) {
      console.error(err);
    }
  }

  async function deleteAllSkills() {
   
    const token = document.querySelector('input[name="_token"]')?.value;
    try {
      await fetch("{{ route('delete.all') }}", {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': token,
          'Accept': 'application/json'
        },
        body: JSON.stringify({ _method: 'DELETE' })
      });
      fetchSkills();
    } catch (err) {
      console.error(err);
    }
  }

  document.addEventListener('DOMContentLoaded', fetchSkills);
</script>

<x-footer />
