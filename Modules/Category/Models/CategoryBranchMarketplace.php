<?php
namespace Plenty\Modules\Category\Models;


/**
 * The CategoryBranchMarketplace model
 */
abstract class CategoryBranchMarketplace 
{
	public		$plenty_category_branch_marketplace_branch_id;
	public		$plenty_category_branch_marketplace_webstore_id;
	public		$plenty_category_branch_marketplace_marketplace_id;
	public		$plenty_category_branch_marketplace_marketplace_sub_id;
	public		$plenty_category_branch_marketplace_delimiter;
	public		$plenty_category_branch_marketplace_value1;
	public		$plenty_category_branch_marketplace_value2;
	public		$plenty_category_branch_marketplace_last_update;
	public		$branch;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}