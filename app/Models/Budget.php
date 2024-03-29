<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DateTime;

class Budget extends Model
{
    protected $table = 'budget';


    public function scopeInsertBudget($q, $input)
    {
        $this->insert([
            "name" => $input["name"],
            "amount" => $input["amount"],
            "created_at" => new DateTime,
            "updated_at" => new DateTime
        ]);
    }

    public function scopeUpdateBudget($q, $input)
    {
        $this->where("id", $input["id"])->update([
            "name" => $input["name"],
            "amount" => $input["amount"],
            "updated_at" => new DateTime
        ]);
    }

    public function scopeDeleteBudget($q, $id)
    {
        $this->where("id", $id)->delete();
    }
}
