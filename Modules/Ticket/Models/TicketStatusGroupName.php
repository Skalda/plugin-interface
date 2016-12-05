<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket status group name model.
 */
abstract class TicketStatusGroupName 
{
	public		$id;
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