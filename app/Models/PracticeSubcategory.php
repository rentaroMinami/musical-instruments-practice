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
 * Class PracticeSubcategory
 * 
 * @property int $id
 * @property int $practice_category_id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property PracticeCategory $practice_category
 * @property Collection|PracticeMenu[] $practice_menus
 *
 * @package App\Models
 */
class PracticeSubcategory extends Model
{
	use SoftDeletes;
	protected $table = 'practice_subcategories';

	protected $casts = [
		'practice_category_id' => 'int'
	];

	protected $fillable = [
		'practice_category_id',
		'name'
	];

	public function practice_category()
	{
		return $this->belongsTo(PracticeCategory::class);
	}

	public function practice_menus()
	{
		return $this->hasMany(PracticeMenu::class);
	}
}
