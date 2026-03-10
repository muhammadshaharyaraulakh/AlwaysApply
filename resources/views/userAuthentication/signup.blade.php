<x-navigationbar />
<section class="py-10 px-4 flex flex-col items-center justify-center min-h-[calc(100vh-80px)]">
    <div class="w-full max-w-2xl">
        <div class="text-center md:text-left mb-6">
            <h1 class="text-3xl md:text-4xl font-semibold text-gray-900 mb-2">Registration form</h1>
            <p class="text-gray-500 text-sm md:text-base">Register to apply for jobs of your choice all over the world</p>
        </div>
        
        <div class="bg-white rounded-2xl shadow-xl p-6 md:p-10 border border-gray-100">
            <form action="{{ route('register.otp') }}" class="space-y-6" method="POST">
                @csrf
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Full name<span class="text-red-500">*</span></label>
                    <input type="text" placeholder="Enter your full name" name="name" value="{{ old('name') }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:border-transparent placeholder-gray-400">
                </div>
                @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Email Id<span class="text-red-500">*</span></label>
                    <input type="email" placeholder="Enter your email id" name="email" value="{{ old('email') }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:border-transparent placeholder-gray-400">
                    <p class="text-xs text-gray-500 mt-1">Job notifications will be sent to this email id</p>
                </div>
                @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                    <div class="relative">
            <input
              type="password"
              id="passwordInputLogin"
              value="{{ old('password') }}"
              placeholder="Enter password"
              name="password"
              class="w-full border border-gray-200 rounded-lg px-4 py-3.5 text-gray-700 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:border-transparent placeholder-gray-400 bg-white pr-16"
            />
            <button
              type="button"
              id="togglePasswordBtnLogin"
              class="absolute right-4 top-1/2 -translate-y-1/2 text-brand-purple font-medium text-sm hover:text-purple-900 focus:outline-none cursor-pointer"
            >
              Show
            </button>
          </div>
          @error('password')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror 
        </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Mobile number<span class="text-red-500">*</span></label>
                    <input type="tel" placeholder="Enter your mobile number" name="mobile" value="{{ old('mobile') }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:border-transparent placeholder-gray-400">
                    <p class="text-xs text-gray-500 mt-1">Recruiters will contact you on this number</p>
                </div>
                @error('mobile')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

                <div class="flex items-start gap-3 mt-4">
                    <div class="flex items-center h-5">
                        <input id="updates" name="updates" value="1" type="checkbox" class="w-5 h-5 text-brand-purple border-gray-300 rounded focus:ring-brand-purple accent-purple-700">
                    </div>
                    <label for="updates" class="text-sm text-gray-500 leading-snug">
                        Send me important updates & promotions via SMS, email, and
                        <span class="inline-flex items-center gap-1 font-medium text-green-600">
                            <i class="fa-brands fa-whatsapp text-lg"></i> WhatsApp
                        </span>
                    </label>
                </div>

                <button type="submit" class="w-fit px-10 py-3 bg-brand-purple text-white text-lg cursor-pointer font-normal rounded-lg shadow-lg hover:bg-purple-800 transition transform active:scale-95 mt-4">
                    Register now
                </button>

                <div class="relative flex py-5 items-center">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <span class="flex-shrink-0 mx-4 text-gray-500 text-sm">or signup with</span>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>

                <div class="flex justify-center gap-6">
                    <x-googleauth />
                    <x-githubauth />
                </div>

            </form>
        </div>
    </div>
</section>
</body>
</html>
