<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonModel extends Model
{
    use HasFactory;
    public $table = "pegawai";
    protected $fillable = ['nama matpel', 'id matpel', 'linkV'];
}
