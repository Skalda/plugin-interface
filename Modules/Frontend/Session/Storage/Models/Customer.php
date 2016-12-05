<?php
namespace Plenty\Modules\Frontend\Session\Storage\Models;


/**
 * session storage model for customer data
 */
abstract class Customer 
{
	public		$deliveryCountryId;
	public		$showNetPrice;
	public		$ebaySellerAccount;
	public		$accountContactSign;
	public		$accountContactClassId;
	public		$sourceItemWishListAccountContactId;
	public		$sourceItemWishListAccountAddressId;
	public		$salesAgent;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}