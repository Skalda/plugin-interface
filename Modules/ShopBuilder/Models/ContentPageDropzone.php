<?php
namespace Plenty\Modules\ShopBuilder\Models;


/**
 * Layout container of a content page where to display link contents generated by the shop builder.
 */
abstract class ContentPageDropzone 
{
	public		$container;
	public		$type;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}