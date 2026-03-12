<x-navigationbar />
<section class="bg-gray-50 min-h-screen pb-20">
  <div
    class="w-full h-32 md:h-48 bg-gradient-to-r from-brand-purple to-purple-400"
  ></div>

  <div
    class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 md:-mt-16 relative z-10"
  >
    <div
      class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 md:p-8 flex flex-col md:flex-row items-center md:items-end gap-6 relative"
    >
      <div class="relative flex-shrink-0">
        <img
          src="https://ui-avatars.com/api/?name=Anil&background=f3e8ff&color=6300B3&size=150"
          alt="Profile Picture"
          class="w-24 h-24 md:w-32 md:h-32 rounded-full border-4 border-white shadow-md object-cover"
        />
      </div>

      <div class="flex-1 text-center md:text-left mt-2 md:mt-0">
        <div
          class="flex flex-col md:flex-row md:items-center gap-2 md:gap-3 mb-1 justify-center md:justify-start"
        >
          <h1 class="text-2xl md:text-3xl font-bold text-gray-900">Anil</h1>
          <span
            class="text-blue-500 text-lg md:text-xl"
            title="Identity Verified"
            ><i class="fa-solid fa-circle-check"></i
          ></span>
          <span
            class="bg-green-100 text-green-700 text-xs font-bold px-2.5 py-1 rounded-md uppercase tracking-wide ml-0 md:ml-2"
            >Available for Internship</span
          >
        </div>
        <p class="text-gray-700 font-medium text-sm md:text-base">
          Backend PHP & Laravel Developer
        </p>
        <div
          class="flex flex-wrap items-center justify-center md:justify-start gap-x-4 gap-y-2 mt-2 text-sm text-gray-500"
        >
          <span class="flex items-center gap-1.5"
            ><i class="fa-solid fa-location-dot"></i> Islamabad, Pakistan</span
          >
          <span class="flex items-center gap-1.5"
            ><i class="fa-solid fa-envelope"></i> anil@example.com</span
          >
          <span class="flex items-center gap-1.5"
            ><i class="fa-solid fa-phone"></i> +92 300 1234567</span
          >
        </div>
      </div>

      <div
        class="flex flex-col sm:flex-row gap-3 w-full md:w-auto mt-4 md:mt-0"
      >
        <button
          class="px-5 py-2.5 bg-brand-purple text-white font-semibold rounded-lg shadow-md hover:bg-brand-dark transition flex items-center justify-center gap-2 cursor-pointer w-full sm:w-auto text-sm"
        >
          <i class="fa-solid fa-file-arrow-down"></i> Download Resume
        </button>
      </div>
    </div>

    <div class="mt-6 grid grid-cols-1 lg:grid-cols-3 gap-6">
      <div class="lg:col-span-1 space-y-6">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
          <h2 class="text-lg font-bold text-gray-900 mb-4">Skills</h2>
          <div class="flex flex-wrap gap-2">
            <span
              class="bg-purple-50 text-brand-purple border border-purple-100 px-3 py-1.5 rounded-lg text-sm font-medium"
              >Laravel</span
            >
            <span
              class="bg-purple-50 text-brand-purple border border-purple-100 px-3 py-1.5 rounded-lg text-sm font-medium"
              >PHP</span
            >
            <span
              class="bg-purple-50 text-brand-purple border border-purple-100 px-3 py-1.5 rounded-lg text-sm font-medium"
              >Tailwind CSS</span
            >
            <span
              class="bg-gray-100 text-gray-700 border border-gray-200 px-3 py-1.5 rounded-lg text-sm font-medium"
              >RESTful APIs</span
            >
            <span
              class="bg-gray-100 text-gray-700 border border-gray-200 px-3 py-1.5 rounded-lg text-sm font-medium"
              >MySQL</span
            >
            <span
              class="bg-gray-100 text-gray-700 border border-gray-200 px-3 py-1.5 rounded-lg text-sm font-medium"
              >Android / Java</span
            >
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
          <h2 class="text-lg font-bold text-gray-900 mb-4">
            Digital Footprint
          </h2>
          <ul class="space-y-3">
            <li>
              <a
                href="#"
                class="flex items-center gap-3 text-sm text-gray-600 hover:text-brand-purple transition"
              >
                <i class="fa-brands fa-github text-xl w-6 text-center"></i>
                github.com/anil-dev
              </a>
            </li>
            <li>
              <a
                href="#"
                class="flex items-center gap-3 text-sm text-gray-600 hover:text-brand-purple transition"
              >
                <i
                  class="fa-brands fa-linkedin text-xl w-6 text-center text-[#0A66C2]"
                ></i>
                linkedin.com/in/anil
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="lg:col-span-2 space-y-6">
        <div
          class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8"
        >
          <h2 class="text-xl font-bold text-gray-900 mb-3">About Me</h2>
          <p class="text-gray-600 leading-relaxed text-sm md:text-base">
            Passionate backend developer with a strong focus on PHP and Laravel.
            I enjoy building secure REST APIs and clean, responsive user
            interfaces using Tailwind CSS. Currently looking for an internship
            opportunity to apply my knowledge of MVC architecture and database
            optimization in a real-world tech environment.
          </p>
        </div>

        <div
          class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8"
        >
          <h2 class="text-xl font-bold text-gray-900 mb-5">Experience</h2>
          <div class="space-y-6">
            <div class="flex gap-4">
              <div
                class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center text-brand-purple shrink-0 mt-1"
              >
                <i class="fa-solid fa-briefcase text-xl"></i>
              </div>
              <div>
                <h3 class="font-bold text-gray-900 text-lg">
                  PHP Backend Developer Intern
                </h3>
                <p class="text-sm font-medium text-gray-700 mb-1">
                  Tech Solutions Inc.
                  <span class="text-gray-400 font-normal ml-2"
                    >• Islamabad</span
                  >
                </p>
                <p class="text-xs text-gray-500 mb-3">Jan 2026 - Present</p>
                <p class="text-sm text-gray-600">
                  Developing and testing RESTful APIs using Laravel. Assisting
                  the senior team in database migration and optimizing backend
                  logic for an upcoming SaaS product.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div
          class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8"
        >
          <h2 class="text-xl font-bold text-gray-900 mb-5">
            Featured Projects
          </h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div
              class="border border-gray-200 rounded-xl p-5 hover:border-brand-purple transition group"
            >
              <div class="flex justify-between items-start mb-2">
                <h3
                  class="font-bold text-gray-900 group-hover:text-brand-purple transition text-lg"
                >
                  AI Digital Marketing Engine
                </h3>
                <a href="#" class="text-gray-400 hover:text-gray-700"
                  ><i class="fa-solid fa-arrow-up-right-from-square"></i
                ></a>
              </div>
              <p class="text-sm text-gray-500 mb-3">
                Final year project. A web-based analytics engine designed to
                optimize digital marketing workflows.
              </p>
              <div class="flex gap-2 text-xs font-medium text-gray-500">
                <span class="bg-gray-100 px-2 py-1 rounded">PHP</span>
                <span class="bg-gray-100 px-2 py-1 rounded">Laravel</span>
              </div>
            </div>

            <div
              class="border border-gray-200 rounded-xl p-5 hover:border-brand-purple transition group"
            >
              <div class="flex justify-between items-start mb-2">
                <h3
                  class="font-bold text-gray-900 group-hover:text-brand-purple transition text-lg"
                >
                  Interactive Quiz System
                </h3>
                <a href="#" class="text-gray-400 hover:text-gray-700"
                  ><i class="fa-solid fa-arrow-up-right-from-square"></i
                ></a>
              </div>
              <p class="text-sm text-gray-500 mb-3">
                Developed a complete quiz management system featuring a user
                dashboard, live timer, and results tracking.
              </p>
              <div class="flex gap-2 text-xs font-medium text-gray-500">
                <span class="bg-gray-100 px-2 py-1 rounded">Laravel</span>
                <span class="bg-gray-100 px-2 py-1 rounded">Tailwind</span>
              </div>
            </div>
          </div>
        </div>

        <div
          class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8"
        >
          <h2 class="text-xl font-bold text-gray-900 mb-6">Education</h2>
          <div class="relative border-l-2 border-gray-100 ml-3 space-y-8">
            <div class="relative pl-6">
              <div
                class="absolute -left-[9px] top-1 w-4 h-4 bg-white border-2 border-brand-purple rounded-full"
              ></div>
              <h3 class="font-bold text-gray-900 text-lg">
                BS Computer Science
              </h3>
              <p class="text-sm font-medium text-gray-700 mb-1">
                National University
              </p>
              <p class="text-xs text-gray-500 mb-2">2022 - 2026</p>
              <p class="text-sm text-gray-600">
                Focusing on Software Engineering, Backend Architecture, and
                Database Systems.
              </p>
            </div>

            <div class="relative pl-6">
              <div
                class="absolute -left-[9px] top-1 w-4 h-4 bg-white border-2 border-gray-300 rounded-full"
              ></div>
              <h3 class="font-bold text-gray-900 text-lg">
                Intermediate (ICS)
              </h3>
              <p class="text-sm font-medium text-gray-700 mb-1">
                Punjab College
              </p>
              <p class="text-xs text-gray-500 mb-2">2020 - 2022</p>
              <p class="text-sm text-gray-600">
                Computer Science, Mathematics, and Physics.
              </p>
            </div>

            <div class="relative pl-6">
              <div
                class="absolute -left-[9px] top-1 w-4 h-4 bg-white border-2 border-gray-300 rounded-full"
              ></div>
              <h3 class="font-bold text-gray-900 text-lg">Matriculation</h3>
              <p class="text-sm font-medium text-gray-700 mb-1">
                High School Islamabad
              </p>
              <p class="text-xs text-gray-500 mb-2">2018 - 2020</p>
              <p class="text-sm text-gray-600">Science Group.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<x-footer />