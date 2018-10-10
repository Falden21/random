<?php

namespace Acme\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public function Testimonials()
    {
        return $this->hasMany("Acme\Models\Testimonial");
    }
}
