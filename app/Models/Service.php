<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title'];

    public function problems()
    {
        return $this->belongsToMany(Problem::class, 'service_problem');
    }
}
