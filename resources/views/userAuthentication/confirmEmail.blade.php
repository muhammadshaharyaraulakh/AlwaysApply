<x-navigationbar />

<section class="py-10 px-4 flex flex-col items-center justify-center min-h-[calc(100vh-80px)]">
    
    <div class="w-full max-w-2xl">

        <div class="text-center mb-6">
            <h1 class="text-3xl md:text-4xl font-semibold text-brand-purple mb-2">
                Verify Your Email
            </h1>
            <p class="text-gray-500 text-sm md:text-base">
                Enter the 6 digit OTP sent to your email to Proceed with your registration please check your spam folder or request a new one.
            </p>
        </div>

        <div class=" p-6 md:p-10 ">

            

            <form action="{{ route('verify.otp') }}" method="POST" class="space-y-8">
                @csrf

                <input type="hidden" name="email" value="{{ session('email') }}">

                <div class="flex justify-center gap-3">

    <input type="text" name="otp[]" maxlength="1"
        class="w-12 h-14 text-center text-xl border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-purple focus:outline-none">

    <input type="text" name="otp[]" maxlength="1"
        class="w-12 h-14 text-center text-xl border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-purple focus:outline-none">

    <input type="text" name="otp[]" maxlength="1"
        class="w-12 h-14 text-center text-xl border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-purple focus:outline-none">

    <input type="text" name="otp[]" maxlength="1"
        class="w-12 h-14 text-center text-xl border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-purple focus:outline-none">

    <input type="text" name="otp[]" maxlength="1"
        class="w-12 h-14 text-center text-xl border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-purple focus:outline-none">

    <input type="text" name="otp[]" maxlength="1"
        class="w-12 h-14 text-center text-xl border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-purple focus:outline-none">
       @error('otp')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror   
</div>

                <div class="flex justify-center">
                    <button type="submit"
                        class="px-10 py-3 bg-brand-purple cursor-pointer text-white text-lg rounded-lg shadow-lg hover:bg-purple-800 transition transform active:scale-95">
                        Confirm OTP
                    </button>
                    
                </div>

            </form>

        </div>
    </div>

</section>