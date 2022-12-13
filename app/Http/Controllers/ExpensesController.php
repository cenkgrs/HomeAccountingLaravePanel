<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

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
            }

            if ($input["method"] == "update") {
                Expenses::updateExpense($input);
            }

            if ($input["method"] == "delete") {
                Expenses::deleteExpense($input);
            }
        }

        $data["expenses"] = Expenses::paginate(20);

        $data["categories"] = Categories::all(["id", "name"]);

        $data["columns"] = Schema::getColumnListing('budget');

        if (isset($message)) {
            return redirect()->route('expenses')->with('success_message', $message);
        }

        return view("expenses.index", $data);
    }
}
