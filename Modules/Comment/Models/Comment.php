<?php
namespace Plenty\Modules\Comment\Models;


/**
 * The Comment model.
 */
abstract class Comment 
{
	public		$text;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}