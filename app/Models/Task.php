<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    public function getDeadlineAttribute($deadline)
    {
        return Carbon::parse($deadline)->timezone('UTC');
    }
}
