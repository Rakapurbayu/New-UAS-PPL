<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class LessonModel extends Model
{
    use HasFactory;
    public $fillable = ['id','nama_matpel', 'desc_svideo', 'link_video'];
    public $table = 'lesson';
    public $timestamps = false;
}
