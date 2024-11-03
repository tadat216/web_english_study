<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Option
 * 
 * @property int $id
 * @property int $question_id
 * @property int $option_number
 * @property string $text
 * @property bool $is_correct
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Question $question
 * @property Collection|ResultDetail[] $result_details
 *
 * @package App\Models
 */
class Option extends Model
{
	protected $connection = 'mysql';
	protected $table = 'options';

	protected $casts = [
		'question_id' => 'int',
		'option_number' => 'int',
		'is_correct' => 'bool'
	];

	protected $fillable = [
		'question_id',
		'option_number',
		'text',
		'is_correct'
	];

	public function question()
	{
		return $this->belongsTo(Question::class);
	}

	public function result_details()
	{
		return $this->hasMany(ResultDetail::class);
	}
}
