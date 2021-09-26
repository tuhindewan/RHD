<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    public $table = 'businesses';

    protected $fillable = [
        'business_acquisition_date',
        'business_acquisition_name',
        'business_property_amount',
        'business_reason_price',
        'business_source_money',
        'business_acquisition_address',
        'business_comments',
        'user_id',
        'property_type'
    ];
}
