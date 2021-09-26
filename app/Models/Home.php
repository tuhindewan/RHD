<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    public $table = 'homes';

    protected $fillable = [
        'home_acquisition_date',
        'home_acquisition_name',
        'home_property_amount',
        'home_reason_price',
        'home_source_money',
        'home_acquisition_address',
        'home_comments',
        'user_id',
        'property_type'
    ];
}
