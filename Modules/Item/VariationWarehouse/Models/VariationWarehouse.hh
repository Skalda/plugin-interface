<?hh
namespace Plenty\Modules\Item\VariationWarehouse\Models;


/**
 * Variation Warehouse
 */
abstract class VariationWarehouse 
{
	public int $variationId;
	public int $warehouseId;
	public int $warehouseZoneId;
	public string $storageLocationType;
	public int $reorderLevel;
	public int $maximumStock;
	public int $stockTurnoverInDays;
	public int $storageLocation;
	public int $stockBuffer;
	public string $lastUpdateTimestamp;
	public string $createdAt;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array<string, mixed>
	{
		return [];
	}

}