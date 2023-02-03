<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelBy extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table = 'travel_by';
    protected $fillable = [
        'id',
        'name',
        'icon'
    ];
}
