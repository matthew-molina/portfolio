<?php

namespace App\Traits;

use \Rutorika\Sortable\SortableTrait;

trait STDSortableTrait
{
	use SortableTrait;

	/**
	 * [Add this to your migration column]
	 * @var column name for sorting
	 */
	protected static $sortableField = 'order_column';

	/**
	 * [method used for dropzone thumbnail]
	 * @return [string] [image url]
	 */
	public function renderSortThumbnail()
    {
        if (!$this->path)
            return 'https://dummyimage.com/100x100/ddd/fff&text=' . $this->id;

        return url('/') . '/storage/' . $this->image_path;
    }
}