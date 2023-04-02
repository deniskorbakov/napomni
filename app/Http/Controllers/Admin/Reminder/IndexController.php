<?php

namespace App\Http\Controllers\Admin\Reminder;

use App\Http\Controllers\Controller;
use App\Models\Recorder;
use App\Models\User;


class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        $recorders = Recorder::all();
        return view('admin.reminders.index', compact('users', 'recorders'));

    }
}
