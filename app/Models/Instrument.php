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
 * Class Instrument
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|PracticeMenu[] $practice_menus
 * @property Collection|PracticeRecord[] $practice_records
 * @property Collection|UserInstrument[] $user_instruments
 *
 * @package App\Models
 */
class Instrument extends Model
{
	use SoftDeletes;
	protected $table = 'instruments';

	protected $fillable = [
		'name'
	];

	public function practice_menus()
	{
		return $this->belongsToMany(PracticeMenu::class, 'instrument_belonging_to_practice_menu')
					->withPivot('id', 'name', 'deleted_at')
					->withTimestamps();
	}

	public function practice_records()
	{
		return $this->hasMany(PracticeRecord::class);
	}

	public function user_instruments()
	{
		return $this->hasMany(UserInstrument::class);
	}
}
