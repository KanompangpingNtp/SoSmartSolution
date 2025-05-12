<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceVideo extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url_link'];

    public function files()
    {
        return $this->hasMany(ServiceVideoFile::class);
    }
}
