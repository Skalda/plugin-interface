<?hh
namespace Plenty\Modules\Market\Ebay\PartsFitment\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ModelWithUniqueFieldException;
use Plenty\Modules\Market\Ebay\PartsFitment\Models\Fitment;
use Plenty\Repositories\Contracts\SortableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;

/**
 * The contract for the fitment repository.
 */
interface FitmentRepositoryContract 
{

	/**
	 * Returns a fitment by an ID.
	 */
	public function find(
		int $id
	):?Fitment;

	/**
	 * Creates a new fitment.
	 */
	public function create(
		array<mixed> $data
	):Fitment;

	/**
	 * Updates an existing fitment.
	 */
	public function update(
		array<mixed> $data, 
		int $id
	):Fitment;

	/**
	 * Deletes a fitment. Returns `true` if the deletion was successful, otherwise `false`.
	 */
	public function delete(
		int $id
	):bool;

	/**
	 * Pushes a sorting order to a collection.
	 */
	public function pushSortingOrder(
		string $field, 
		string $direction = "asc"
	):SortableContract;

	/**
	 * Applies the sorting order on the underlying builder instance
	 */
	public function applySortingOrder(
	):SortableContract;

	/**
	 * Clears the sorting order on the underlying builder instance
	 */
	public function clearSortingOrder(
	):SortableContract;

}