<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;

    public $table = 'lands';

    protected $fillable = [
        'land_acquisition_date',
        'land_acquisition_name',
        'land_property_amount',
        'land_reason_price',
        'land_source_money',
        'land_acquisition_address',
        'land_comments',
        'user_id',
        'property_type'
    ];
}
