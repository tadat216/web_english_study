<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Plan
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $price
 * @property int $type
 * 
 * @property Collection|Exam[] $exams
 * @property Collection|PaymentStatus[] $payment_statuses
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Plan extends Model
{
	protected $connection = 'mysql';
	protected $table = 'plans';
	public $timestamps = false;

	protected $casts = [
		'price' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'price',
		'type'
	];

	public function exams()
	{
		return $this->hasMany(Exam::class);
	}

	public function payment_statuses()
	{
		return $this->hasMany(PaymentStatus::class);
	}

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
