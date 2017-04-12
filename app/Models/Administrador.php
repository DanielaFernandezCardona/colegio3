<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
   
    /**
     * Get the totalMes  record associated with the user.
     */
    public function totalMes()
    {
        return $this->hasOne(totalMes::class);
    }

	/**
     * Get the  totalAnio associated with the user.
     */
    public function totalAnio()
    {
        return $this->hasOne(totalAnio::class);
    }

}
