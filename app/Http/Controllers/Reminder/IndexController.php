<?php

namespace App\Http\Controllers\Reminder;

use App\Http\Controllers\Controller;
use App\Models\Recorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $recorders = Recorder::all()->where('user_id', Auth::id());
        return (view('reminders.index', compact('recorders')));

    }
}
