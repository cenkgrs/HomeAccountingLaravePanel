<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CategoriesController extends Controller
{
    
    public function index(Request $request)
    {
        $categories = Categories::paginate(10);

        $columns = Schema::getColumnListing('categories');

        if ($request->isMethod('post')) {

            $input = $request->all();
            $operation = $input['operation'];

            if ($operation == 'insert') {
                Categories::insert([
                    'name'          => $input['name'],
                    'created_at'    => new DateTime,
                    'updated_at'    => new DateTime,
                ]);
            }

            if ($operation == 'delete') {
                Categories::where('id', $input["id"])->delete();
            }

            return redirect()->back()->with('success_message', 'Kategori başarılı bir şekilde eklendi');
        }

        $data = [
            "categories" => $categories,
            "columns" => $columns
        ];

        return view("categories.index", $data);
    }

    public function getCategory(Request $request)
    {
        $input = $request->all();

        $category = Categories::getCategory($input["id"]);

        dd($category);

        return response()->json(["status" => true, "category" => $category]);
    }
}
