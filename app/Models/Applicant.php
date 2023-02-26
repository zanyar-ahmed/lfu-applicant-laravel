<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'detail',
        'fullName','email', 
        'dep',
        'graduYear',
        'placeTo',
        'lang',
        'date' ,
        'grad',
    ];
}
