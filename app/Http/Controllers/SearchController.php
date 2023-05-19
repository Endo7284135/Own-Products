<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

// **************************************
class SearchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = item::query();

        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%")

                ->orWhere('detail', 'LIKE', "%{$keyword}%");
            }

        $items = $query->get();

        return view('search.index', compact('items', 'keyword'));
    }
// **************************************
    public function detail($id)
    {
        $item = item::find($id);
             return view('search.detail', compact('item'));
    }
    
}
// **************************************

// class SearchController extends Controller
// {
//     public function index()
//     {
//         $items = Item::all();
//         return view('search.index',compact('items') );
//     }
// }
