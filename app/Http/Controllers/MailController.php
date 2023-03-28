<?php

namespace App\Http\Controllers;

use App\Mail\SendAllUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        $users = User::pluck("email");

        foreach ($users as $recipient) {
            Mail::to($recipient)->send(new SendAllUsers());
        }


    }
}
