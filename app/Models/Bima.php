<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bima extends Model
{
    use HasFactory;

    public $table = 'bimas';

    protected $fillable = [
        'bima_acquisition_date',
        'bima_acquisition_name',
        'bima_property_amount',
        'bima_reason_price',
        'bima_source_money',
        'bima_acquisition_address',
        'bima_comments',
        'user_id',
        'property_type'
    ];
}
