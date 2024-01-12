<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

// **************************************
class SearchController extends Controller
{
    public function index(Request $request)
    {
        // 検索フォームで入力された値を取得する
        $keyword = $request->input('keyword');

        // クエリビルダ
        $query = item::sortable();

        //もし検索フォームにキーワードが入力されたら(if)  *!は逆接を表す
        //「商品名」と部分一致するものがあれば、$queryとして保持される
        //次に、「詳細」で部分一致するものがあれば、$queryとして保持される
        //上記で取得した$queryを変数$itemsに代入
        //部分一致・・・複数ワードの部分一致に対応した検索機能
        if(!empty($keyword)) {
            $items = $query->where('name', 'LIKE', "%{$keyword}%")
            ->orWhere('detail', 'LIKE', "%{$keyword}%")
            ->paginate(5);
                //キーワードがなくても(else)
                //上記で取得した$queryをページネートにし、変数$itemsに代入せよ
            } else {
                $items = $query->paginate(5);
            }

        // compact関数を使い、ビューにitemsとkeywordを変数として渡す
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