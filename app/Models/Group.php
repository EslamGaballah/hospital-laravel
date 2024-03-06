<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['name', 'notes'];
    public $fillable = ['Total_before_discount', 'discount_value', 'Total_after_discount', 'Tax_rate', 'Total_with_tax'];


}
