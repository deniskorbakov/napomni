<?php

namespace App\Console;

use App\Mail\SendAllUsers;
use App\Models\Recorder;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            date_default_timezone_set("Europe/Moscow");
            $recorders = Recorder::all();

            foreach ($recorders as $recorder) {
                $recorderTime = $recorder["time"];
                $recorderTime = substr($recorderTime, 0,-3);

                if ($recorderTime == date("H:i")) {
                    Mail::to($recorder["user_email"])->send(new SendAllUsers());
                }
            }
        })->everyMinute();

    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
