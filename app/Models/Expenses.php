<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Budget;
use App\Models\Categories;

use DateTime;

class Expenses extends Model
{
    protected $table = 'expenses';

    // Relationships
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }

    public function scopeGetExpense($q, $id)
    {
        return $this->where('id', $id)->first();
    }

    public function scopeInsertExpense($q, $input)
    {
        $this->insert([
            "budget_id"     => $input["budget_id"],
            "category_id"   => $input["category_id"],
            "expense"       => $input["expense"],
            "price"         => $input["price"],
            "expense_date"  => new DateTime($input["expense_date"]),
            "created_at"    => new DateTime,
            "updated_at"    => new DateTime
        ]);
    }

    public function scopeUpdateExpense($q, $input)
    {
        $expense = $this->find($input["id"]);

        $this->where("id", $input["id"])->update([
            "budget_id"     => $input["budget_id"],
            "category_id"   => $input["category_id"],
            "expense"       => $input["expense"],
            "price"         => $input["price"],
            "expense_date"  => new DateTime($input["expense_date"]),
            "updated_at"    => new DateTime
        ]);
    }

    public function scopeDeleteExpense($q, $input)
    {
        $this->where("id", $input["id"])->delete();
    }
}
