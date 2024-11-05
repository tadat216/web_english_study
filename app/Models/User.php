<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User
 * 
 * @property int $id
 * @property int $plan_id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Plan $plan
 * @property Collection|PaymentStatus[] $payment_statuses
 * @property Collection|Result[] $results
 *
 * @package App\Models
 */
class User extends Model
{
	use HasRoles;
	protected $connection = 'mysql';
	protected $table = 'users';

	protected $casts = [
		'plan_id' => 'int',
		'email_verified_at' => 'datetime'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'plan_id',
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public function plan()
	{
		return $this->belongsTo(Plan::class);
	}

	public function payment_statuses()
	{
		return $this->hasMany(PaymentStatus::class);
	}

	public function results()
	{
		return $this->hasMany(Result::class);
	}
}
