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

        $query = item::sortable();

        if(!empty($keyword)) {
            $items = item::where('name', 'LIKE', "%{$keyword}%")
            ->orWhere('detail', 'LIKE', "%{$keyword}%")
            ->paginate(5);
            } else {
                $items = item::paginate(5);
            }

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
