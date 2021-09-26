<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electronic extends Model
{
    use HasFactory;

    public $table = 'electronics';

    protected $fillable = [
        'electronics_acquisition_date',
        'electronics_acquisition_name',
        'electronics_property_amount',
        'electronics_reason_price',
        'electronics_source_money',
        'electronics_acquisition_address',
        'electronics_comments',
        'user_id',
        'property_type'
    ];
}
