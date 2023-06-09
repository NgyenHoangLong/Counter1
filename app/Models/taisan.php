<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taisan extends Model
{
    use HasFactory;
    protected $table = 'taisan';

    public function loaits()
    {
        return $this->belongsTo(loaits::class, 'loaits_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(users::class, 'users_id', 'id');
    }
}
