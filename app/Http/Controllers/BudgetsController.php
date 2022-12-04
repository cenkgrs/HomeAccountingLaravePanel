<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

use App\Models\Budget;

class BudgetsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {

            $input = $request->all();

            if ($input["method"] == "insert") {
                Budget::insertBudget($input);
    
                $message = "Bütçe girdisi eklendi";
            }
    
            if ($input["method"] == "update") {
                Budget::updateBudget($input);
    
                $message = "Bütçe girdisi güncellendi";
            }
    
            if ($input["method"] == "delete") {
                Budget::deleteBudget($input["id"]);
    
                $message = "Bütçe girdisi silindi";
            }

        }

        $data["budgets"] = Budget::paginate(20);
        $data["columns"] = Schema::getColumnListing('budget');

        if (isset($message)) {
            return redirect()->route('budgets')->with('success_message', $message);
        }

        return view('budgets.index', $data);

    }

}