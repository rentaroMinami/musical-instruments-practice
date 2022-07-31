<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PracticeRecord
 * 
 * @property int $id
 * @property int $instrument_id
 * @property int $practice_menu_id
 * @property int $practice_seconds
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Instrument $instrument
 * @property PracticeMenu $practice_menu
 *
 * @package App\Models
 */
class PracticeRecord extends Model
{
	use SoftDeletes;
	protected $table = 'practice_records';

	protected $casts = [
		'instrument_id' => 'int',
		'practice_menu_id' => 'int',
		'practice_seconds' => 'int'
	];

	protected $fillable = [
		'instrument_id',
		'practice_menu_id',
		'practice_seconds'
	];

	public function instrument()
	{
		return $this->belongsTo(Instrument::class);
	}

	public function practice_menu()
	{
		return $this->belongsTo(PracticeMenu::class);
	}
}
