<?php

namespace App\Http\Controllers;

use App\Mail\SendAllUsers;
use App\Models\Recorder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
//        $usersEmail = User::pluck("email");
      $today = date("H:i:s");
      date_default_timezone_set("Europe/Moscow");
        $recorders = Recorder::all();
        foreach ($recorders as $recorder) {
            $recorderTime = $recorder["time"];
            $recorderTime = substr($recorderTime, 0,-3);

            if ($recorderTime == date("H:i")) {
                Mail::to($recorder["user_email"])->send(new SendAllUsers());
            }
        }

    }
}
