<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ResultDetail
 * 
 * @property int $id
 * @property int $result_id
 * @property int $option_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Option $option
 * @property Result $result
 *
 * @package App\Models
 */
class ResultDetail extends Model
{
	protected $connection = 'mysql';
	protected $table = 'result_details';

	protected $casts = [
		'result_id' => 'int',
		'option_id' => 'int'
	];

	protected $fillable = [
		'result_id',
		'option_id'
	];

	public function option()
	{
		return $this->belongsTo(Option::class);
	}

	public function result()
	{
		return $this->belongsTo(Result::class);
	}
}
