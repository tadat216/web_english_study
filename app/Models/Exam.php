<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Exam
 * 
 * @property int $id
 * @property int $exam_type_id
 * @property int $plan_id
 * @property string $title
 * @property string $description
 * @property Carbon $time_limit
 * @property int $max_score
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property ExamType $exam_type
 * @property Plan $plan
 * @property Collection|Result[] $results
 * @property Collection|Section[] $sections
 *
 * @package App\Models
 */
class Exam extends Model
{
	protected $connection = 'mysql';
	protected $table = 'exams';

	protected $casts = [
		'exam_type_id' => 'int',
		'plan_id' => 'int',
		'time_limit' => 'datetime',
		'max_score' => 'int'
	];

	protected $fillable = [
		'exam_type_id',
		'plan_id',
		'title',
		'description',
		'time_limit',
		'max_score'
	];

	public function exam_type()
	{
		return $this->belongsTo(ExamType::class);
	}

	public function plan()
	{
		return $this->belongsTo(Plan::class);
	}

	public function results()
	{
		return $this->hasMany(Result::class);
	}

	public function sections()
	{
		return $this->hasMany(Section::class);
	}
}
