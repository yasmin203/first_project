<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $table = 'systems';

    protected $fillable = ['name'];

    // public function uses()
    // {
    //     return $this->hasMany('App\Employee', 'bank_id', 'id');

    // }
}
