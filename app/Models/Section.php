<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\contracts\Translatable as Translatablecontract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{   
    use Translatable; // to add translation methods
    protected $fillable =['name', 'description'];
    // to define which attributes needs to be translated
    public $translatedAttributes = ['name', 'description'];

    use HasFactory;

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
