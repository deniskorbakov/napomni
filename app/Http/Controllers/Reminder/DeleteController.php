<?php

namespace App\Http\Controllers\Reminder;

use App\Models\Recorder;
class DeleteController extends BaseController
{
    public function __invoke(Recorder $recorder)
    {
       $recorder->delete();

       return redirect()->route('reminders.index');
    }
}
