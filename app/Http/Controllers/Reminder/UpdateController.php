<?php

namespace App\Http\Controllers\Reminder;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reminder\StoreRequest;
use App\Http\Requests\Reminder\UpdateRequest;
use App\Models\Recorder;
use Illuminate\Support\Facades\Auth;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Recorder $recorder)
    {
        $data = $request->validated();

        $recorder->update($data);
        return redirect()->route('reminders.show',$recorder->id);
    }
}
