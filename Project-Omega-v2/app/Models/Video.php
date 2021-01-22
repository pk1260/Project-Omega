<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'video';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'video_path',
        'updated_at',
    ];
}
