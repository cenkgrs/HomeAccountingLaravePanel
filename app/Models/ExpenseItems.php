<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseItems extends Model
{
    protected $table = 'expenses';

    use HasFactory;
}
