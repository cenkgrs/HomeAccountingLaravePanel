<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

use App\Models\Budget;
use App\Models\Categories;
use App\Models\Expenses;

class ExpensesController extends Controller
{
    public function index(Request $requets)
    {
        if ($requets->isMethod('post')) {
            $input = $requets->all();

            if ($input["method"] == "insert") {
                Expenses::insertExpense($input);

                $message = "Harcama eklendi";
            }

            if ($input["method"] == "update") {
                Expenses::updateExpense($input);

                $message = "Harcama güncellendi";
            }

            if ($input["method"] == "delete") {
                Expenses::deleteExpense($input);

                $message = "Harcama silindi";
            }
        }

        $data = [
            "expenses" => Expenses::paginate(20),
            "budgets" => Budget::all(["id", "name"]),
            "categories" => Categories::all(["id", "name"]),
            "columns" => Schema::getColumnListing('expenses'),
        ];

        if (isset($message)) {
            return redirect()->route('expenses')->with('success_message', $message);
        }

        return view("expenses.index", $data);
    }

    public function getExpense(Request $requets)
    {
        $input = $requets->all();

        $expense = Expenses::getExpense($input["id"]);

        return response()->json(["expense" => $expense]);
    }
}
