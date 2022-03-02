<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_details';

    /**
     * No timestamps
     * No created_at
     * No updated_at
     */
    public $timestamps = false;
    protected $dates = [];

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public function country()
    {
        return $this->hasOne(Country::class, 'id', 'citizenship_country_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
