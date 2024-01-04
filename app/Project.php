<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    const CATEGORY_COMPLETED = 'Completed';
    const CATEGORY_RUNNING = 'Running';
    const CATEGORY_UPCOMING = 'Upcoming';
}
