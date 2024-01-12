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
            $colors = Item::COLORS;
            return view('item.index',compact('items','types','sizes','colors') );
        }
    
        public function create()
        {
            $types = Item::TYPES;
            $sizes = Item::SIZES;
            $colors = Item::COLORS;
            return view('item.add',compact('types','sizes','colors') );
        }
    
        public function store(Request $request){
        
            $validate_rule = [
                'name' => 'min:5|max:15|required',
                'type_id' => 'required',
                'size_id' => 'required',
                'color_id' => 'required',
                'price' => 'numeric|between:10000,500000',
                'detail' => 'min:5|max:100|required',
            ];
            $this->validate($request, $validate_rule);
    
            // 新しくレコードを追加する
            $items = new Item();
            $items->name = $request->name;
            $items->user_id = Auth::id();
            $items->type_id = $request->type_id;
            $items->size_id = $request->size_id;
            $items->color_id = $request->color_id;
            $items->price = $request->price;
            $items->detail = $request->detail;
            $items->save();
          
            return redirect('/item');
        }
    
        public function edit(Request $request)
        {
            //一覧から指定されたIDと同じIDのレコードを取得する   
            $types = Item::TYPES;
            $sizes = Item::SIZES;
            $colors = Item::COLORS;
            $items = Item::where('id','=',$request->id)->first();
            
            return view('item.edit',compact('types','sizes','colors') )->with([
                    'item' => $items
            ]);
        }
    
        public function update(Request $request){
        
            $validate_rule = [
                'name' => 'min:5|max:15|required',
                'type_id' => 'required',
                'size_id' => 'required',
                'color_id' => 'required',
                'price' => 'numeric|between:10000,500000',
                'detail' => 'min:5|max:100|required',
            ];
            $this->validate($request, $validate_rule);
    
            // 既存のレコードを取得して、編集してから保存する
            $items = Item::where('id','=',$request->id)->first();
            $items->name = $request->name;
            $items->type_id = $request->type_id;
            $items->size_id = $request->size_id;
            $items->color_id = $request->color_id;
            $items->price = $request->price;
            $items->detail = $request->detail;
            $items->save();

            return redirect('/item');
        }
    
        public function destroy(Request $request){
    
            // 既存のレコードを取得して、削除する
            $items = Item::where('id','=',$request->id)->first();
            $items->delete();
    
            return redirect('/item');
        }

}
    