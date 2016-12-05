<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket status group model.
 */
abstract class TicketStatusGroup 
{
	public		$id;
	public		$position;
	public		$color;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}