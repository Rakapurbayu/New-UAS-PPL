<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class LessonModel extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_matpel', 'desc_svideo', 'link_video'];
    protected $table = 'lesson';
    public $timestamps = false;
}
