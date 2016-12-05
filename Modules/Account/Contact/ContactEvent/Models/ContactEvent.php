<?php
namespace Plenty\Modules\Account\Contact\ContactEvent\Models;


/**
 * The contact event model
 */
abstract class ContactEvent 
{
	public		$eventId;
	public		$contactId;
	public		$userId;
	public		$eventDuration;
	public		$eventType;
	public		$orderRowId;
	public		$eventInfo;
	public		$billable;
	public		$eventInsertedAt;
	public		$eventBilledAt;
	public		$eventProvisionPaidAt;
	public		$eventCreditValue;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}