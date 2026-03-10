<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;

    /**
     * Create a new message instance.
     */
    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Your AlwaysApply Verification Code')
                    ->html($this->emailTemplate());
    }

    private function emailTemplate()
    {
        return "
        <div style='margin:0; padding:0; font-family: \"Poppins\", Arial, sans-serif; background:#f9fafb; padding:40px 20px;'>

            <table width='100%' cellpadding='0' cellspacing='0'>
                <tr>
                    <td align='center'>

                        <table width='600' cellpadding='0' cellspacing='0'
                               style='background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 10px 25px rgba(99, 0, 179, 0.1); border: 1px solid #f3e8ff;'>

                            <tr>
                                <td style='background-color:#6300B3; color:white; padding:30px 20px; text-align:center;'>
                                    <h1 style='margin:0; color:white; font-size: 28px; font-weight: bold;'>AlwaysApply</h1>
                                    <p style='margin:8px 0 0; font-size: 16px; color:white;  opacity: 0.9;'>Secure Account Verification</p>
                                </td>
                            </tr>

                            <tr>
                                <td style='padding:40px 30px; text-align:center; color:#374151;'>
                                    <h2 style='margin-top: 0; color:#111827;'>Hello!</h2>
                                    <p style='font-size: 16px; line-height: 1.5;'>Please use the verification code:</p>

                                    <div style='margin:35px 0;'>
                                        <span style='
                                            display:inline-block;
                                            font-size:36px;
                                            letter-spacing:12px;
                                            padding:20px 30px;
                                            background:#faf5ff;
                                            border: 2px dashed #d8b4fe;
                                            border-radius:10px;
                                            font-weight:bold;
                                            color:#6300B3;
                                        '>
                                            {$this->otp}
                                        </span>
                                    </div>

                                    <p style='color:#6b7280; font-size: 14px;'>
                                        This code is valid for <strong>10 minutes</strong>.<br>
                                        Please do not share this code with anyone.
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td style='background:#f8fafc; border-top: 1px solid #e2e8f0; color:#64748b; text-align:center; padding:25px 20px;'>
                                    <p style='margin:0; font-size: 14px; font-weight: 500;'>© " . date('Y') . " AlwaysApply. All rights reserved.</p>
                                    <p style='font-size:13px; margin-top: 8px;'>If you didn’t request this email, you can safely ignore it.</p>
                                </td>
                            </tr>

                        </table>

                        <p style='color:#9ca3af; font-size:12px; margin-top:20px; font-weight: 500;'>
                        This is Automated Email so please do not reply to this address.
                        </p>

                    </td>
                </tr>
            </table>

        </div>
        ";
    }
}