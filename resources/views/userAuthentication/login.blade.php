<x-navigationbar />
<section
  class="min-h-[calc(100vh-80px)] flex items-center justify-center p-4 md:p-8"
>
  <div
    class="bg-white rounded-[30px] shadow-2xl w-full max-w-[1100px] overflow-hidden flex flex-col md:flex-row min-h-[600px]"
  >
    <div
      class="w-full md:w-1/2 p-8 md:p-12 lg:p-16 flex flex-col justify-center"
    >
      <form action="#" class="space-y-6" method="POST">
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-2"
            >Email</label
          >
          <input
            type="email"
            placeholder="Enter email"
            value="{{ old('email') }}"
            name="email"
            class="w-full border border-gray-200 rounded-lg px-4 py-3.5 text-gray-700 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:border-transparent placeholder-gray-400 bg-white"
          />
          @error('email')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-2"
            >Password</label
          >
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
         
        </div>
 @error('password')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror 
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-2">
            <input
              id="remember"
              type="checkbox"
              name="remember"
              class="w-4 h-4 checkbox-custom border-gray-300 rounded focus:ring-brand-purple accent-purple-700"
            />
            <label for="remember" class="text-sm text-gray-600"
              >Remember me</label
            >
          </div>
          <a
            href="#"
            class="text-sm text-brand-purple font-medium hover:underline"
            >Forgot Password?</a
          >
        </div>

        <button
          type="submit"
          class="w-full cursor-pointer py-3.5 bg-brand-purple text-white text-lg font-bold rounded-lg shadow-lg hover:bg-brand-dark transition transform active:scale-95"
        >
          Login
        </button>

<div class="py-4">

  <div class="flex items-center">
    <div class="flex-grow border-t border-gray-200"></div>
    <span class="mx-4 text-gray-500 text-sm">or login with</span>
    <div class="flex-grow border-t border-gray-200"></div>
  </div>
  <div class="mt-4 flex justify-center gap-4">
    <x-googleauth />
    <x-githubauth />
  </div>
</div>


        <div class="flex justify-center gap-6">
         
        
        </div>

        <div class="text-center mt-6">
          <p class="text-gray-600">
            Don't have an account?
            <a
              href="{{route('register')}}"
              class="text-brand-purple font-bold hover:underline"
              >Register</a
            >
          </p>
        </div>
      </form>
    </div>

    <div
      class="hidden md:flex w-1/2 bg-brand-light items-center justify-center p-12 relative overflow-hidden"
    >
      <div
        class="absolute w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"
      ></div>
      <img
        src="{{asset('images/login.png')}}"
        alt="Login Illustration"
        class="relative z-10 w-full max-w-md object-contain drop-shadow-xl rounded-xl"
      />
    </div>
  </div>
</section>
</body>
</html>