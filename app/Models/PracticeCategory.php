<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PracticeCategory
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|PracticeSubcategory[] $practice_subcategories
 *
 * @package App\Models
 */
class PracticeCategory extends Model
{
	use SoftDeletes;
	protected $table = 'practice_categories';

	protected $fillable = [
		'name'
	];

	public function practice_subcategories()
	{
		return $this->hasMany(PracticeSubcategory::class);
	}
}
