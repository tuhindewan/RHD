<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatementDetail extends Model
{
    use HasFactory;

    public $table = 'statement_details';

    public $fillable = [
        'acquisition_date',
        'property_amount',
        'acquisition_name',
        'comments',
        'reason_price',
        'source_money',
        'acquisition_address',
        'statement_id'
    ];

    public function statement()
    {
        return $this->belongsTo(Statement::class);
    }
}
