<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceVideoFile extends Model
{
    use HasFactory;

    protected $fillable = ['service_video_id', 'file_path', 'file_type'];

    public function serviceVideo()
    {
        return $this->belongsTo(ServiceVideo::class);
    }
}
