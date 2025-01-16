<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoSell extends Model
{
    /** @use HasFactory<\Database\Factories\PhotoSellFactory> */
    use HasFactory;

    function createdBy() {
        return $this->belongsTo(User::class, 'created_by');
    }
}
