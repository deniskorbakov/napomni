<?php

namespace App\Http\Controllers\Reminder;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reminder\StoreRequest;
use App\Models\Recorder;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    public function __invoke(Recorder $recorder)
    {
        return view('reminders.edit', compact('recorder'));
    }
}
