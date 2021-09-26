<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    public $table = 'stocks';

    protected $fillable = [
        'stock_acquisition_date',
        'stock_acquisition_name',
        'stock_property_amount',
        'stock_reason_price',
        'stock_source_money',
        'stock_acquisition_address',
        'stock_comments',
        'user_id',
        'property_type'
    ];
}
