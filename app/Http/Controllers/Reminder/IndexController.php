<?php

namespace App\Http\Controllers\Reminder;

use App\Models\Recorder;
use Illuminate\Support\Facades\Auth;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $recorders = Recorder::all()->where('user_id', Auth::id());
        return (view('reminders.index', compact('recorders')));

    }
}
