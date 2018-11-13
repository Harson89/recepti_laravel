<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategorije2 extends Model
{
    public function recieps()
    {
        return $this->hasMany(kategorije2::class);
    }
}
