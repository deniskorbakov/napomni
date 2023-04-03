<?php

namespace App\Http\Controllers\Reminder;

use App\Models\Recorder;
class ShowController extends BaseController
{
    public function __invoke(Recorder $recorder)
    {
        return view('reminders.show', compact('recorder'));
    }
}
