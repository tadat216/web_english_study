<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ExamType
 * 
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Exam[] $exams
 *
 * @package App\Models
 */
class ExamType extends Model
{
	protected $connection = 'mysql';
	protected $table = 'exam_types';

	protected $fillable = [
		'name',
		'description'
	];

	public function exams()
	{
		return $this->hasMany(Exam::class);
	}
}
