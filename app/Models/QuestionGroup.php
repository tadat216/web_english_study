<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class QuestionGroup
 * 
 * @property int $id
 * @property int $part_id
 * @property string $name
 * @property string $text
 * @property string|null $audio_link
 * @property string|null $image_link
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Part $part
 * @property Collection|Question[] $questions
 *
 * @package App\Models
 */
class QuestionGroup extends Model
{
	protected $connection = 'mysql';
	protected $table = 'question_groups';

	protected $casts = [
		'part_id' => 'int'
	];

	protected $fillable = [
		'part_id',
		'name',
		'text',
		'audio_link',
		'image_link'
	];

	public function part()
	{
		return $this->belongsTo(Part::class);
	}

	public function questions()
	{
		return $this->hasMany(Question::class);
	}
}
