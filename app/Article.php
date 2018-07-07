<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\STDSortableTrait;

class Article extends Model
{
    use SoftDeletes, STDSortableTrait;

    protected $guarded;
    protected $appends = ['extra'];

    const MINIMAL_TABLE = [
        'id', 
        'title', 'short_description',
        'order_column',
    ];

    const TABLE_COLUMNS = [
        'id', 
        'title', 'description',
        'order_column',
    ];

    public function getExtraAttribute() {
        return $this->attributes['extra'] = [
        	//
        ];
    }

    public function article_items()
    {
    	return $this->hasMany(ArticleItem::class, 'article_id');
    }
}
