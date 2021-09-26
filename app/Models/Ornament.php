<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ornament extends Model
{
    use HasFactory;

    public $table = 'ornaments';

    protected $fillable = [
        'ornament_acquisition_date',
        'ornament_acquisition_name',
        'ornament_property_amount',
        'ornament_reason_price',
        'ornament_source_money',
        'ornament_acquisition_address',
        'ornament_comments',
        'user_id',
        'property_type'
    ];
}
