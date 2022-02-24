<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Articale;
use Illuminate\Http\Request;

class ArticaleController extends Controller
{
    public function list(){
        $articale=Articale :: all();
        return response()->json($articale);
    }
    public function delete($id){
        $articale = Articale :: find($id);
        if($articale){
            $articale->delete();
        }
        return response()->json($articale);
    }
    public function update(Request $request){
        $article=Articale::find($request->id); 
        $article->name=$request->name;
        $article->details=$request->details;
        $article->slug=$request->slug;
        $article->is_used=$request->is_used;
        $result=$article->save();
       if($result){
        return response()->json($article);
       }
        
       }
       
}
