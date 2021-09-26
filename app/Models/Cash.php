<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    use HasFactory;

    public $table = 'cashes';

    protected $fillable = [
        'cash_acquisition_date',
        'cash_acquisition_name',
        'cash_property_amount',
        'cash_reason_price',
        'cash_source_money',
        'cash_acquisition_address',
        'cash_comments',
        'user_id',
        'property_type'
    ];
}
