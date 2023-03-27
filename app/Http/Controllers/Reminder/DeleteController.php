<?php

namespace App\Http\Controllers\Reminder;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reminder\StoreRequest;
use App\Http\Requests\Reminder\UpdateRequest;
use App\Models\Recorder;
use Illuminate\Support\Facades\Auth;

class DeleteController extends Controller
{
    public function __invoke(Recorder $recorder)
    {
       $recorder->delete();

       return redirect()->route('reminders.index');
    }
}
