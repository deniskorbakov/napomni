<?php

namespace App\Http\Controllers\Reminder;

use App\Models\Recorder;
class EditController extends BaseController
{
    public function __invoke(Recorder $recorder)
    {
        return view('reminders.edit', compact('recorder'));
    }
}
