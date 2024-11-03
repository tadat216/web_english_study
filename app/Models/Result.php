<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Result
 * 
 * @property int $id
 * @property int $user_id
 * @property int $exam_id
 * @property Carbon $time_taken
 * @property Carbon $date_attempt
 * @property bool $is_practice
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Exam $exam
 * @property User $user
 * @property Collection|ResultDetail[] $result_details
 *
 * @package App\Models
 */
class Result extends Model
{
	protected $connection = 'mysql';
	protected $table = 'results';

	protected $casts = [
		'user_id' => 'int',
		'exam_id' => 'int',
		'time_taken' => 'datetime',
		'date_attempt' => 'datetime',
		'is_practice' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'exam_id',
		'time_taken',
		'date_attempt',
		'is_practice'
	];

	public function exam()
	{
		return $this->belongsTo(Exam::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function result_details()
	{
		return $this->hasMany(ResultDetail::class);
	}
}
