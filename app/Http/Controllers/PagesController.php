<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;
use App\Models\Budget;

class PagesController extends Controller
{
    public function dashboard()
    {
        $data['stock_alerts'] = [
            "kg" => 100,
            "lt" => 200,
            "piece" => 10,
        ];

        $data["budget"] = Budget::get();

        $total_budget = 0;

        foreach ($data["budget"] as $b) {
            $total_budget += $b["price"];
        }

        $data = [
            "total_budget" => $total_budget,
        ];

   
        $data['stocks'] = null;//Product::with('categories')->groupBy('category_id') ->selectRaw('*, sum(quantity) as sum')->get();
        
        return view('dashboard.index', $data);
    }
}
