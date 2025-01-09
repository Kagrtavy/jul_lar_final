<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'description', 'logo'];

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
}
