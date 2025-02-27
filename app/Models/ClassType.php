<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassType extends Model
{
    use HasFactory;

    public function scheduledClasses()
    {
        return $this->hasMany(ScheduledClass::class);
    }
}
