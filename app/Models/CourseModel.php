<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{
    use HasFactory;

    protected $table = 'course';
    protected $fillable = ['nama_khursus', 'desc_khursus', 'sumber_khursus'];
}
