<?php

namespace App\Http\Controllers\Reminder;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reminder\StoreRequest;
use App\Models\Recorder;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Recorder::create([
            'name' => $data['name'],
            'content' => $data['content'],
            'value' => $data['value'],
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('reminders.index');
    }
}
