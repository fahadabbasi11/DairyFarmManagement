<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'animals';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'breed', 'calves','lastCalvingDate'];

    
}
