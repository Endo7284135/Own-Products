<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class ItemController extends Controller
{
        public function index()
        {
            $items = Item::all();
            $types = Item::TYPES;
            $sizes = Item::SIZES;
            return view('item.index',compact('items','types','sizes') );
        }
    
        public function create()
        {
            $types = Item::TYPES;
            $sizes = Item::SIZES;
            return view('item.add',compact('types','sizes') );
        }
    
        public function store(Request $request){
        
            // Nameは入力必須項目 by Higaki
            $validate_rule = [
                'name' => 'required',
                'type_id' => 'required',
                'size_id' => 'required',
                'detail' => 'required',
                'price' => 'integer',
            ];
            $this->validate($request, $validate_rule);
    
            // 新しくレコードを追加する by Higaki
            $items = new Item();
            $items->name = $request->name;
            $items->user_id = Auth::id();
            $items->type_id = $request->type_id;
            $items->size_id = $request->size_id;
            $items->price = $request->price;
            $items->detail = $request->detail;
            $items->save();
          
            return redirect('/items');
        }
    
        public function edit(Request $request)
        {
            //一覧から指定されたIDと同じIDのレコードを取得する by Higaki
    
            $types = Item::TYPES;
            $sizes = Item::SIZES;
            $items = Item::where('id','=',$request->id)->first();
            
            return view('item.edit',compact('types','sizes') )->with([
                    'item' => $items
            ]);
        }
    
        public function update(Request $request){
        
            $validate_rule = [
                'name' => 'required',
                'detail' => 'required',
            ];
            $this->validate($request, $validate_rule);
    
            // 既存のレコードを取得して、編集してから保存する by Higaki
            $items = Item::where('id','=',$request->id)->first();
            //dd($request->id);
            $items->name = $request->name;
            $items->type_id = $request->type_id;
            $items->size_id = $request->size_id;
            $items->price = $request->price;
            $items->detail = $request->detail;
            $items->save();

            //return redirect('/items')->route($items->id);
            return redirect('/items');
        }
    
        public function destroy(Request $request){
    
            // 既存のレコードを取得して、削除する by Higaki
            $items = Item::where('id','=',$request->id)->first();
            $items->delete();
    
            return redirect('/items');
        }

}
    