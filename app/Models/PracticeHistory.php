<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PracticeHistory
 * 
 * @property int $id
 * @property int $user_id
 * @property int $instrument_id
 * @property int $practice_menu_id
 * @property int $practice_seconds
 * @property string $memo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Instrument $instrument
 * @property PracticeMenu $practice_menu
 * @property User $user
 *
 * @package App\Models
 */
class PracticeHistory extends Model
{
	use SoftDeletes;
	protected $table = 'practice_histories';

	protected $casts = [
		'user_id' => 'int',
		'instrument_id' => 'int',
		'practice_menu_id' => 'int',
		'practice_seconds' => 'int'
	];

	protected $fillable = [
		'user_id',
		'instrument_id',
		'practice_menu_id',
		'practice_seconds',
		'memo'
	];

	public function instrument()
	{
		return $this->belongsTo(Instrument::class);
	}

	public function practice_menu()
	{
		return $this->belongsTo(PracticeMenu::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
