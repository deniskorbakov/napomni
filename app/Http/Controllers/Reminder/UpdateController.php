<?php

namespace App\Http\Controllers\Reminder;

use App\Http\Requests\Reminder\UpdateRequest;
use App\Models\Recorder;
use DateTime;
class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Recorder $recorder)
    {
        $data = $request->validated();

        $this->service->update($data, $recorder);

        return redirect()->route('reminders.show',$recorder->id);
    }
}
