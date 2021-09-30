<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyCategory extends Model
{
    use HasFactory;

    public $table = 'property_categories';

    public function types()
    {
        return $this->hasMany(PropertyType::class);
    }
}
