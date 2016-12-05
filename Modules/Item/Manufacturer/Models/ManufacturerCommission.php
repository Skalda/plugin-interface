<?php
namespace Plenty\Modules\Item\Manufacturer\Models;

use Plenty\Modules\Item\Manufacturer\Models\Manufacturer;

/**
 * The item manufacturer commission model
 */
abstract class ManufacturerCommission 
{
	public		$id;
	public		$manufacturerId;
	public		$clientId;
	public		$referrerId;
	public		$commission;
	public		$manufacturer;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}