<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';


    public function scopeGetCategory($query, $id)
    {
        return $this->where('id', $id)->first();
    }
}
