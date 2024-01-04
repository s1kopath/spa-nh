<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = [];

    protected $casts = [
        'member_category' => 'json'
    ];

    const MEMBER_CATEGORY_GENERAL = 'General';
    const MEMBER_CATEGORY_ADVISORY = 'Advisory';
    const MEMBER_CATEGORY_EXECUTIVE = 'Executive';

}
