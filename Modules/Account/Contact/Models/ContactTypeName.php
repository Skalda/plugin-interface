<?php
namespace Plenty\Modules\Account\Contact\Models;


/**
 * contact type name model
 */
abstract class ContactTypeName 
{
	public		$id;
	public		$typeId;
	public		$lang;
	public		$name;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}