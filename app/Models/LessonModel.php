<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class LessonModel extends Model
{
    protected $table = 'lesson';
    use HasFactory;
    public $fillable = ['nama_matpel', 'desc_matpel', 'linkV'];
}
