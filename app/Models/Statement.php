<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    use HasFactory;

    public $table = 'statements';

    public $fillable = [
        'category_id',
        'type_id',
        'user_id'
    ];

    public function details()
    {
        return $this->hasMany(StatementDetail::class);
    }

    public function type()
    {
        return $this->belongsTo(PropertyType::class);
    }
}
