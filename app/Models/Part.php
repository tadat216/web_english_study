<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Part
 * 
 * @property int $id
 * @property int $section_id
 * @property string $name
 * @property string $text
 * @property string $audio_link
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Section $section
 * @property Collection|QuestionGroup[] $question_groups
 *
 * @package App\Models
 */
class Part extends Model
{
	protected $connection = 'mysql';
	protected $table = 'parts';

	protected $casts = [
		'section_id' => 'int'
	];

	protected $fillable = [
		'section_id',
		'name',
		'text',
		'audio_link'
	];

	public function section()
	{
		return $this->belongsTo(Section::class);
	}

	public function question_groups()
	{
		return $this->hasMany(QuestionGroup::class);
	}
}
