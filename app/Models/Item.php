<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'type_id',
        'size_id',
        'color_id',
        'price',
        'detail',
    ];

    use Sortable;

    public $sortable = [ //追記(ソートに使うカラムを指定
        'id',
        'price',
        'size_id',
        'type_id',
        'color_id',
    ];

    const SIZES = [
        '1' => 'XS',
        '2' => 'S',
        '3' => 'M',
        '4' => 'L',
        '5' => 'LL',   
        ];

    const COLORS = [
        '1' => 'レッド',
        '2' => 'イエロー',
        '3' => 'ブルー',
        '4' => 'グリーン',
        '5' => 'ブラック',
        '6' => 'ホワイト',
        '7' => 'オレンジ',
        '8' => 'ピンク',
        '9' => 'グレー',
        '10' =>'ベージュ',
        '11' =>'ブラウン',
        '12' =>'パープル',
    ];

    const TYPES = [
        '1' => 'カジュアルシャツ',
        '2' => 'ドレスシャツ',
        '3' => 'ポロシャツ',
        '4' => 'Tシャツ',
        '5' => 'カットソー',
        '6' => 'タンクトップ',
        '7' => 'スウェット',
        '8' => 'パーカー',
        '9' => 'ニット・セーター',
        '10' => 'カーディガン',
        '11' => 'ベスト',
        '12' => 'カジュアルジャケット',
        '13' => 'テーラードジャケット',
        '14' => 'ブルゾン',
        '15' => 'カバーオール',
        '16' => 'デニムジャケット',
        '17' => 'ダウンジャケット・ベスト',
        '18' => 'ミリタリージャケット',
        '19' => 'ライダース',
        '20' => 'トレンチコート',
        '21' => 'ピーコート',
        '22' => 'ステンカラーコート',
        '23' => 'カジュアルパンツ',
        '24' => 'デニムパンツ',
        '25' => 'ショートパンツ',
        '26' => 'スラックス',
        '27' => 'スーツ',
        '28' => 'ネクタイ',     
        ];

    protected $dates = ['created_at', 'updated_at',];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
    ];
}
