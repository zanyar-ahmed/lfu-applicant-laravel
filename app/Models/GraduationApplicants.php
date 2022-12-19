<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraduationApplicants extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullNameKu',
        'fullNameEng',
        'email',
    'dep',
      'graduwation',
      'phoneNumber',
       'graduYear',
      'placeTo',
       'lang',
      'date',
      'require',
      'grad',
    ];




}
