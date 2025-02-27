<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ScheduledClass;

class ScheduledClassPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function delete(User $user, ScheduledClass $scheduledClass)
    {
        return $user->id === $scheduledClass->instructor_id
            && $scheduledClass->date_time > now()->addHours(2);
    }
}
