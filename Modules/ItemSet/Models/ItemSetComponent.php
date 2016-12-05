<?php
namespace Plenty\Modules\ItemSet\Models;

use Plenty\Modules\ItemSet\Models\ItemSet;

/**
 * The ItemSetComponent model.
 */
abstract class ItemSetComponent 
{
	public		$id;
	public		$setId;
	public		$itemId;
	public		$quantity;
	public		$isPurchasable;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}