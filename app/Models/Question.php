<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Question
 * 
 * @property int $id
 * @property int $question_group_id
 * @property int $question_number
 * @property string $text
 * @property string|null $transcript
 * @property string|null $explain
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property QuestionGroup $question_group
 * @property Collection|Option[] $options
 *
 * @package App\Models
 */
class Question extends Model
{
	protected $connection = 'mysql';
	protected $table = 'questions';

	protected $casts = [
		'question_group_id' => 'int',
		'question_number' => 'int'
	];

	protected $fillable = [
		'question_group_id',
		'question_number',
		'text',
		'transcript',
		'explain'
	];

	public function question_group()
	{
		return $this->belongsTo(QuestionGroup::class);
	}

	public function options()
	{
		return $this->hasMany(Option::class);
	}
}
