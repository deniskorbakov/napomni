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
        date_default_timezone_set("Europe/Moscow");
        echo date("l");

    }
}
