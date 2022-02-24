<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Articale;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //show or list db
    public function list(){
        $cateogries = Category :: all(); //select *
        return view('category.list',['cat'=> $cateogries]);
    }
    public function create()
    {
        return view('category.create');
    }
    public function save(StoreCategoryRequest $request)
    {
        $validated = $request->validated();
        $catergory = new Category;
        $catergory->name = $validated['name'];
        $catergory-> save();
        return redirect()->route('category.list');
    }

    public function delete($id)
    {
        $category = Category :: find($id);
        if($category){
            $category->delete();
        }
        return redirect()->route('category.list');
    }
    public function show($id){
     

        $category = Category :: find($id);
        return view("category.show", ['cat' => $category]);
    }
    public function show_data($id){
        $category = Category :: find($id);
        return view("category.showdata", ['cat' => $category]);
    }
    public function save_data(StoreCategoryRequest $request)
    {
        $validated = $request->validated();
        $catergory =  Category :: find($request->id);
        $catergory->name = $validated['name'];
        $catergory-> save();
        return redirect()->route('category.list');
    }
    
}
