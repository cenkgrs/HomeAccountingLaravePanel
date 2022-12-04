<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    protected $table = 'expenses';

    public function scopeInsertExpense($q, $input)
    {
        $this->insert([
            "budget_id" => $input["budget_id"],
            "category_id" => $input["category_id"],
            "expense" => $input["expense"],
            "price" => $input["price"],
            "created_at" => new DateTime,
            "updated_at" => new DateTime
        ]);
    }

    public function scopeUpdateExpense($q, $input)
    {
        $this->where("id", $input["id"])->update([
            "budget_id" => $input["budget_id"],
            "category_id" => $input["category_id"],
            "expense" => $input["expense"],
            "price" => $input["price"],
            "created_at" => new DateTime
        ]);
    }

    public function scopeDeleteExpense($q, $id)
    {
        $this->where("id", $id)->delete();
    }
}
