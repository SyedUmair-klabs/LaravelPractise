<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Member extends Model
{
    use HasFactory;
    public $timestamps=false;

    // function getNameAttribute($value)
    // {
    //     return ucfirst($value." from karachi");
    // }

    function CompanyData()
    {
        return $this->hasOne('App\Models\Company');
        
    }



}