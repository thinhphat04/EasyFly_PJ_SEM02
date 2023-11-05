<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
class ForgotPasswordController extends Controller
{
    public function getEmail()
    {
        return view('auth.password.email');
    }
    public function postEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);
        $token = Str::random(60);
        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );
        Mail::send('auth.password.verify', ['token' => $token], function($message) use ($request) {
          $message->from('admin@example.com')
                ->to($request->email)
                ->subject('Reset Password Notification');
        });
        return back()->with('message', 'We have e-mailed your password reset link!');
    }
}