<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceFile extends Model
{
    use HasFactory;

    protected $fillable = ['service_id', 'file_path', 'file_type', 'status'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
