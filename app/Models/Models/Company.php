<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'cep',
        'number',
        'street',
        'district',
        'city'
    ];
}
