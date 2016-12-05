<?php
namespace Plenty\Modules\Market\Ebay\PartsFitment\Models;

use Illuminate\Database\Eloquent\Collection;

/**
 * The fitment item model. This belongs to one fitment model and can contain multiple FitmentItemProperty models.
 */
abstract class FitmentItem 
{
	public		$id;
	public		$fitmentId;
	public		$fitment;
	public		$properties;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}