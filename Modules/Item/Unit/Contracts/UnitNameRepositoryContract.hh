<?hh
namespace Plenty\Modules\Item\Unit\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Unit\Models\UnitName;

/**
 * Repository for Unit Name
 */
interface UnitNameRepositoryContract 
{

	public function create(
		array<string> $data, 
		int $unitId
	):UnitName;

	public function delete(
		int $unitId, 
		string $lang
	):bool;

	public function update(
		array<string> $data, 
		int $unitId, 
		string $lang
	):UnitName;

	public function findOne(
		int $unitId, 
		string $lang
	):UnitName;

	public function findByUnitId(
		int $unitId
	):?UnitName;

}