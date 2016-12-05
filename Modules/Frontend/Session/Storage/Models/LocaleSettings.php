<?php
namespace Plenty\Modules\Frontend\Session\Storage\Models;


/**
 * session storage model for locale settings
 */
abstract class LocaleSettings 
{
	public		$currency;
	public		$currencyExchange;
	public		$language;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}