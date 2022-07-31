<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserInstrument
 * 
 * @property int $id
 * @property int $user_setting_id
 * @property int $instrument_id
 * @property bool $is_main
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Instrument $instrument
 * @property UserSetting $user_setting
 *
 * @package App\Models
 */
class UserInstrument extends Model
{
	use SoftDeletes;
	protected $table = 'user_instruments';

	protected $casts = [
		'user_setting_id' => 'int',
		'instrument_id' => 'int',
		'is_main' => 'bool'
	];

	protected $fillable = [
		'user_setting_id',
		'instrument_id',
		'is_main'
	];

	public function instrument()
	{
		return $this->belongsTo(Instrument::class);
	}

	public function user_setting()
	{
		return $this->belongsTo(UserSetting::class);
	}
}
