<?php
namespace Plenty\Modules\Market\Ebay\PartsFitment\Models;

use Illuminate\Database\Eloquent\Collection;

/**
 * The fitment model. This can contain multiple FitmentItems models.
 */
abstract class Fitment 
{
	public		$id;
	public		$marketId;
	public		$name;
	public		$categoryId;
	public		$items;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}