<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recieps extends Model
{
    public function kategorije2()
    {
        return $this->belongsTo(recieps::class);
    }
}
