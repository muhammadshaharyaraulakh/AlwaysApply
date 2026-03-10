<?php
namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Mail\OtpMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UserAuthentication extends Controller
{
    public function registrationOtp(RegisterRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['password'] = Hash::make($validatedData['password']);
        $otp = random_int(100000, 999999);
        Session::put('otp_' . $validatedData['email'], [
            'otp'        => $otp,
            'userData'   => [
                'name'     => $validatedData['name'],
                'email'    => $validatedData['email'],
                'password' => $validatedData['password'],
                'mobile'    => $validatedData['mobile'] ?? null,
                'role'     => 'user',
                'status'   => 1,
            ]
        ]);

        Mail::to($validatedData['email'])->send(new OtpMail($otp));

        return redirect()->route('confirm.email')
            ->with('email', $validatedData['email'])
            ->with('success', 'OTP sent to your email. Please check your inbox.');
    }
    public function verify(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'otp'   => 'required|array|size:6',
            'otp.*' => 'required|numeric|digits:1', 
        ]);

        $otpInput = implode('', $request->otp);

        $otpData = Session::get('otp_' . $validated['email']);

        if (! $otpData) {
            return redirect()->route('confirm.email')
                ->with('error', 'OTP has expired. Please register again.');
        }
        
        if ((string) $otpData['otp'] !== (string) $otpInput) {
            return redirect()->route('confirm.email')
                ->with('error', 'Invalid OTP. Please try again.');
        }
        $user = User::create([
            'name' => $otpData['userData']['name'],
            'email' => $otpData['userData']['email'],
            'role' => $otpData['userData']['role'],
             'mobile' => $otpData['userData']['mobile'],
            'password' => $otpData['userData']['password'],  
            'status' => $otpData['userData']['status']  
        ]);
        Session::forget('otp_' . $validated['email']);
        Auth::login($user);
        return redirect('/')
            ->with('success', 'Account created successfully');
    }
}