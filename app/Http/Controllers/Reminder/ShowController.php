<?php

namespace App\Http\Controllers\Reminder;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reminder\StoreRequest;
use App\Models\Recorder;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function __invoke(Recorder $recorder)
    {
        return view('reminders.show', compact('recorder'));
    }
}
