<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stud extends Model
{
    use HasFactory;

    protected $table = 'student';

    protected $fillable =[
        	'name',
            'password',
            'email',
            'fname',
            'contact',
            'dob',
            'add',
            'course'
    ];
}
