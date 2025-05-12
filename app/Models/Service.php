<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name','url_link'];

    public function files()
    {
        return $this->hasMany(ServiceFile::class);
    }
}
