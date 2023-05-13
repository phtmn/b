<?php

namespace App\Http\Controllers;
use App\Models\Good;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    protected $guarded = [];

    public function index() {

        return view('goods.index');
     }
   
     public function create() {
   
        return view('goods.create');
     }
   
     public function store(Request $request) {
       
        $goods = new Good;
        
        $goods->title = $request->title;
        $goods->description = $request->description;
        $goods->intention = $request->intention;
   
        $goods->save();
   
        return redirect('goods.index');
     }
   
     public function edit($id) {
   
        return view('goods.edit');
     }
   
     public function update(Request $request, $id) {
   
        $goods = Good::findOrFail($id);
        
        $goods->title = $request->title;
        $goods->description = $request->description;
        $goods->intention = $request->intention;
      
        $goods->update();
   
        $data = Good::all();
        return redirect('goods.index', ['data' => $data]);
     }
   
     public function delete($id) {
   
        $goods = Good::findOrFail($id);
        
        $goods->delete();
   
        return redirect('goods.index');
     }
}
