<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    use HasFactory;

    public $table = 'property_types';

    protected $fillable = [
        'name',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(PropertyCategory::class);
    }

    public function statements()
    {
        return $this->hasMany(Statement::class);
    }
}
