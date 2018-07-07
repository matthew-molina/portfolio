<?php

namespace App;

class Helpers
{
	public static function replaceArrayValue(
		array $array, 
		$replaceValue = null, 
		$searchValue = ""
	) {
		return array_replace($array,
		    array_fill_keys(
		        array_keys($array, $searchValue),
		        $replaceValue
		    )
		);
	}
}