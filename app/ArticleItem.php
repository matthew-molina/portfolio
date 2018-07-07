<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\STDSortableTrait;

class ArticleItem extends Model
{
    use SoftDeletes, STDSortableTrait;

    protected $guarded;
    protected $appends = ['extra'];

    const MINIMAL_TABLE = [
        'id', 'article_id',
    ];
    
    const TABLE_COLUMNS = [
        'id', 'article_id',
        'title', 'subtitle',
        'description',
        'order_column',
    ];

    public function getExtraAttribute() {
        return $this->attributes['extra'] = [
        	//
        ];
    }

    public function article()
    {
    	return $this->belongsTo(Article::class, 'article_id');
    }
}
