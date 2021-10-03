<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    use HasFactory;

    public $table = 'statements';

    public $fillable = [
        'acquisition_date',
        'property_amount',
        'acquisition_name',
        'comments',
        'reason_price',
        'source_money',
        'acquisition_address',
        'type_id',
        'user_id'
    ];
}
