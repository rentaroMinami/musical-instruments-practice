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
 * Class PracticeMenu
 * 
 * @property int $id
 * @property int $practice_subcategory_id
 * @property string $name
 * @property bool $is_user_defined
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property PracticeSubcategory $practice_subcategory
 * @property Collection|Instrument[] $instruments
 * @property Collection|PracticeHistory[] $practice_histories
 *
 * @package App\Models
 */
class PracticeMenu extends Model
{
	use SoftDeletes;
	protected $table = 'practice_menus';

	protected $casts = [
		'practice_subcategory_id' => 'int',
		'is_user_defined' => 'bool'
	];

	protected $fillable = [
		'practice_subcategory_id',
		'name',
		'is_user_defined'
	];

	public function practice_subcategory()
	{
		return $this->belongsTo(PracticeSubcategory::class);
	}

	public function instruments()
	{
		return $this->belongsToMany(Instrument::class, 'instrument_belonging_to_practice_menu')
					->withPivot('id', 'name', 'deleted_at')
					->withTimestamps();
	}

	public function practice_histories()
	{
		return $this->hasMany(PracticeHistory::class);
	}
}
