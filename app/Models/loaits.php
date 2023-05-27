<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaits extends Model
{
    use HasFactory;
    protected $table = 'loaits';

    public function taisan()
	{
		return $this->hasMany(taisan::class, 'loaits_id', 'id');
    }
}
