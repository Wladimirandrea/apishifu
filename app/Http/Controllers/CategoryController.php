<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('category_id')
            ->with('children_categories')
            ->get();

            return response()->json($categories);
    }



    public function store(Request $request)
    {

        $categories = new Category;
        $categories->name = $request->name;
        $categories->category_id = $request->category_id;

        $categories->save();
        $data = [
            'message' => 'categoria creado correctamente',
            'categories' => $categories
        ];
        return response()->json($data);
    }

}
