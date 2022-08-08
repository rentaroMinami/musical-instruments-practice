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
 * Class UserSetting
 * 
 * @property int $id
 * @property int $target_practice_seconds
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property User $user
 * @property Collection|UserInstrument[] $user_instruments
 *
 * @package App\Models
 */
class UserSetting extends Model
{
	use SoftDeletes;
	protected $table = 'user_settings';

	protected $casts = [
		'target_practice_seconds' => 'int'
	];

	protected $fillable = [
		'target_practice_seconds'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function user_instruments()
	{
		return $this->hasMany(UserInstrument::class);
	}
}
