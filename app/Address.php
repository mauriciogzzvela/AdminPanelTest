<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{

  use Notifiable;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'iduser', 'street', 'number', 'neighborhood', 'zipcode', 'state', 'country'
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

}
