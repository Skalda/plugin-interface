<?php
namespace Plenty\Modules\Order\Models;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Accounting\Vat\Models\Vat;
use Carbon\Carbon;

/**
 * The order item model. Items, shipping costs, coupons, surcharges etc. are all displayed as order items.
 */
abstract class OrderItem 
{
	public		$id;
	public		$orderId;
	public		$typeId;
	public		$referrerId;
	public		$itemVariationId;
	public		$quantity;
	public		$orderItemName;
	public		$attributeValues;
	public		$shippingProfileId;
	public		$countryVatId;
	public		$vatField;
	public		$vatRate;
	public		$createdAt;
	public		$updatedAt;
	public		$order;
	public		$type;
	public		$countryVat;
	public		$amounts;
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