<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\contracts\Translatable as Translatablecontract;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use Translatable; // to add translation methods
    use HasFactory;

    public $translatedAttributes = ['name', 'appointments'];
    public $fillable =['email', 'email_verified_at', 'passwors', 'phone', 'price', 'name', 'appointments', 'section_id'];

      /**
     * Get the Doctor's image.
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
