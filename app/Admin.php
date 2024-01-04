<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $guarded = [];

    const ACCESS_LEVEL_SUPER = 'Super';
    const ACCESS_LEVEL_Manager = 'Manager';
    const STATUS_ACTIVE = 'Active';
    const STATUS_INACTIVE = 'Inactive';

}
