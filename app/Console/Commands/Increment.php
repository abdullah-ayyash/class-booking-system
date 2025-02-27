<?php

namespace App\Console\Commands;

use App\Models\ScheduledClass;
use Illuminate\Console\Command;

class Increment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:increment {--days=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Increment all the scheduled classes date.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $scheduledClasses = ScheduledClass::latest('date_time')->get();
        $scheduledClasses->each(function ($class) {
            $class->date_time = $class->date_time->addDays((int)$this->option('days'));
            $class->save();
        });
    }
}
