<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    use HasFactory;

    public $table = 'shares';

    protected $fillable = [
        'share_acquisition_date',
        'share_acquisition_name',
        'share_property_amount',
        'share_reason_price',
        'share_source_money',
        'share_acquisition_address',
        'share_comments',
        'user_id',
        'property_type'
    ];
}
