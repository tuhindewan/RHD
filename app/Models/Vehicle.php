<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public $table = 'vehicles';

    protected $fillable = [
        'vehicle_acquisition_date',
        'vehicle_acquisition_name',
        'vehicle_property_amount',
        'vehicle_reason_price',
        'vehicle_source_money',
        'vehicle_acquisition_address',
        'vehicle_comments',
        'user_id',
        'property_type'
    ];
}
