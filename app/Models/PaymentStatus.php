<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentStatus
 * 
 * @property int $id
 * @property int $user_id
 * @property int $plan_id
 * @property bool $is_paid
 * @property Carbon $paid_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Plan $plan
 * @property User $user
 *
 * @package App\Models
 */
class PaymentStatus extends Model
{
	protected $connection = 'mysql';
	protected $table = 'payment_statuses';

	protected $casts = [
		'user_id' => 'int',
		'plan_id' => 'int',
		'is_paid' => 'bool',
		'paid_at' => 'datetime'
	];

	protected $fillable = [
		'user_id',
		'plan_id',
		'is_paid',
		'paid_at'
	];

	public function plan()
	{
		return $this->belongsTo(Plan::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
