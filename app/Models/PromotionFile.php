<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionFile extends Model
{
    use HasFactory;

    protected $fillable = ['promotion_id', 'file_path', 'file_type'];

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }
}
