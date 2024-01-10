<?php

namespace App\Models\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\contracts\Translatable as Translatablecontract;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{   
    use Translatable; // to add translation methods
    protected $fillable =['name'];
    // to define which attributes needs to be translated
    public $translatedAttributes = ['name'];

    use HasFactory;
}
