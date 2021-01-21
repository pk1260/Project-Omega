<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video_items extends Model
{
    use HasFactory;

    protected $table = 'video_items';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'video',
        'created_at',
    ];
}
