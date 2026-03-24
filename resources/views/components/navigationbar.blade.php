<!Doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AlwaysApply</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="bg-gray-50 text-gray-800">
    <div class="relative">
 <nav
      class="bg-white py-4 px-6 md:px-12 flex flex-wrap items-center justify-between relative z-50 "
    >
      <div class="flex items-center gap-2 cursor-pointer flex-shrink-0">
        <svg
          width="26"
          height="27"
          viewBox="0 0 26 27"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M11.5149 11.9536H11.5206M13.8081 8.36752V7.17216C13.8081 6.85513 13.6873 6.55109 13.4723 6.32692C13.2572 6.10275 12.9656 5.97681 12.6615 5.97681H10.3682C10.0641 5.97681 9.77248 6.10275 9.55745 6.32692C9.34241 6.55109 9.22161 6.85513 9.22161 7.17216V8.36752M17.248 12.5513C15.5468 13.7221 13.5533 14.3463 11.5149 14.3463C9.47642 14.3463 7.48287 13.7221 5.78174 12.5513M6.92836 8.36752H16.1013C16.7346 8.36752 17.248 8.9027 17.248 9.56287V15.5396C17.248 16.1998 16.7346 16.735 16.1013 16.735H6.92836C6.2951 16.735 5.78174 16.1998 5.78174 15.5396V9.56287C5.78174 8.9027 6.2951 8.36752 6.92836 8.36752Z"
            stroke="#6300B3"
            stroke-width="1.00962"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
          <path
            d="M24.1278 25.1025L18.6495 19.3913M21.5797 11.8208C21.5797 17.689 17.0165 22.4461 11.3875 22.4461C5.75852 22.4461 1.19531 17.689 1.19531 11.8208C1.19531 5.95252 5.75852 1.19537 11.3875 1.19537C17.0165 1.19537 21.5797 5.95252 21.5797 11.8208Z"
            stroke="#6300B3"
            stroke-width="2.39071"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
        <span class="text-xl font-bold text-brand-purple">AlwaysApply</span>
      </div>

      <div
        class="desktop-links hidden md:flex flex-wrap items-center gap-6 text-sm font-medium text-gray-700 flex-auto justify-center"
      >
        <a href="/" class="hover:text-brand-purple transition">Home</a>
        <a href="/jobs" class="hover:text-brand-purple transition"> Jobs</a>
        <a href="/dashboard" class="hover:text-brand-purple transition"
          >Dashboard</a
        >
     <a href="{{ route('profile.public', Auth::id()) }}" class="hover:text-brand-purple transition">
    View Public Profile
</a>
      </div>

      <div
        class="desktop-buttons  hidden md:flex flex-wrap items-center gap-4 flex-shrink-0"
      >
       @if(Auth::check())

        <div class="flex  gap-4">
  <a href="{{ route('contact') }}" class="w-1/2">
    <button
      class="w-full cursor-pointer px-6 py-2 bg-brand-purple text-white rounded font-medium shadow-md hover:bg-purple-800 transition"
    >
      Contact
    </button>
  </a>

  <a href="{{ route('logout') }}" class="w-1/2">
    <button
      class="w-full cursor-pointer px-5 py-2 border border-brand-purple text-brand-purple rounded font-medium hover:bg-brand-light transition"
    >
      Logout
    </button>
  </a>
</div>
        @else
               <a href="{{route('login')}}">
          <button
            class="cursor-pointer px-6 py-2 bg-brand-purple text-white rounded font-medium shadow-md hover:bg-purple-800 transition"
          >
            Login
          </button>
        </a>
        <a href="{{route('register')}}">
          <button
            class="cursor-pointer px-5 py-2 border border-brand-purple text-brand-purple rounded font-medium hover:bg-brand-light transition"
          >
            Register
          </button>
        </a>
        @endif
      </div>

      <button
        id="mobile-menu-btn"
        class="md:hidden text-2xl text-gray-700 focus:outline-none"
      >
        <i class="fa-solid fa-bars"></i>
      </button>
    </nav>

   <div
id="mobile-menu"
class="hidden flex-col  bg-white p-4 md:hidden w-full shadow-lg transition-all duration-300 ease-in-out origin-top scale-y-0 opacity-0 absolute top-full left-0 z-[9999]"
>

      <a href="/" class="hover:text-brand-purple transition py-2">Home</a>
      <a href="/jobs" class="hover:text-brand-purple transition py-2"
        >Find Jobs</a
      >
      <a href="/dashboard" class="hover:text-brand-purple transition py-2"
        >Dashboard</a
      >
      <a href="/applications" class="hover:text-brand-purple transition py-2"
        >Applications</a
      >
      <div class="mt-4 flex flex-col  gap-3">
  @if(Auth::check())
    <a href="{{ route('contact') }}" class="w-1/3">
      <button
        class="w-full px-5 py-2 border border-brand-purple text-brand-purple rounded font-medium"
      >
        Contact 
      </button>
    </a>

    <a href="{{ route('logout') }}" class="w-1/3">
      <button
        class="w-full px-6 py-2 bg-brand-purple text-white rounded font-medium"
      >
        Logout
      </button>
    </a>
  @else
    <a href="{{ route('register') }}" class="w-1/3">
      <button
        class="w-full px-5 py-2 border border-brand-purple text-brand-purple rounded font-medium"
      >
        Register
      </button>
    </a>

    <a href="{{ route('login') }}" class="w-1/3">
      <button
        class="w-full px-6 py-2 bg-brand-purple text-white rounded font-medium"
      >
        Login
      </button>
    </a>
  @endif
</div>
    </div>
</div>
