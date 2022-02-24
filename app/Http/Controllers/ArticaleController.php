<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticaleRequest;
use App\Models\Articale;
use Illuminate\Http\Request;
use App\Models\Category;
class ArticaleController extends Controller
{
    public function list(){
        $articales = Articale :: all(); //select *
        return view('articale.list',['art'=> $articales]);
    }
    public function create()
    {
        $catid= Category :: all();
        return view('articale.create',['catid'=>$catid]);
    }
    public function save(StoreArticaleRequest $request)
    {
        $validated = $request->validated();
        $articale = new Articale; //insert akni ba5od empty row object from class
        $articale-> fk_id = $validated['fk_id'] ;
        $articale->name = $validated ['name'];
        $articale->details = $validated  ['details'];
        $articale->slug = $validated  ['slug'];
        $articale->is_used = $validated  ['is_used'];
        $articale-> save();
        return redirect()->route('articale.list');
    }
    public function delete($id){
        $articale = Articale :: find($id);
        if($articale){
            $articale->delete();
        }
        return redirect()->route('articale.list');
    }
    public function show($id){
        $articale = Articale :: find($id);
        
        return view("articale.show", ['art' => $articale]);
    }
    public function show_data($id){
        $articale = Articale :: find($id);
        return view("articale.showdata", ['art' => $articale]);
    }
    public function save_data(StoreArticaleRequest $request)
    {
        $validated = $request->validated();
        $articale =  Articale :: find($request->id);
        $articale-> fk_id = $validated['fk_id'];
        $articale->name = $validated ['name'];
        $articale->details = $validated  ['details'];
        $articale->slug = $validated  ['slug'];
        $articale->is_used = $validated  ['is_used'];
        $articale-> save();
        return redirect()->route('articale.list');
    }
}
