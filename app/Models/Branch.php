<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = ['name', 'image', 'address', 'phone', 'company_id'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
