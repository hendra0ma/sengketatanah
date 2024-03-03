<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpEmail;
use App\Mail\SubjectMail;
use Illuminate\Support\Facades\DB;

class EmailController extends Controller
{
    //
    public function sendEmail(Request $request)
    {
        $details = [
            'otp' => rand(1000, 9999)
        ];
        Mail::to($request->email)->send(new OtpEmail($details));
        return response()->json([
            'status' => "berhasil kirim email"
        ]);
    }
    public function sendEmailSubject(Request $request)
    {
        $user = DB::table('users')->select('id')->where('email', $request->email)->first();
        if ($user == NULL) return redirect()->back()->with('error', 'Alamat Email anda tidak terdaftar');

        $details = [
            'name' => $request->name,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'subjek' => $request->subjek,
        ];
        Mail::to($request->email)->send(new SubjectMail($details));
        return redirect()->back()->with('success', 'berhasil mengirim email ke' . $request->name);
    }
}
