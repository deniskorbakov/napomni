<?php

namespace App\Http\Controllers\Reminder;

use App\Http\Requests\Reminder\StoreRequest;
use App\Models\Recorder;
use DateTime;
use Illuminate\Support\Facades\Auth;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('reminders.index');

    }
}
