<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    public $table = 'buildings';

    protected $fillable = [
        'building_acquisition_date',
        'building_acquisition_name',
        'building_property_amount',
        'building_reason_price',
        'building_source_money',
        'building_acquisition_address',
        'building_comments',
        'user_id',
        'property_type'
    ];
}
