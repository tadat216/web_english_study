<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Section
 * 
 * @property int $id
 * @property int $exam_id
 * @property string $name
 * @property string|null $description
 * @property string $text
 * @property string|null $audio_link
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Exam $exam
 * @property Collection|Part[] $parts
 *
 * @package App\Models
 */
class Section extends Model
{
	protected $connection = 'mysql';
	protected $table = 'sections';

	protected $casts = [
		'exam_id' => 'int'
	];

	protected $fillable = [
		'exam_id',
		'name',
		'description',
		'text',
		'audio_link'
	];

	public function exam()
	{
		return $this->belongsTo(Exam::class);
	}

	public function parts()
	{
		return $this->hasMany(Part::class);
	}
}
