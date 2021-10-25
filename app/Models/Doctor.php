<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    use HasFactory;
    protected $fillable = [
        'rut',
        'user_name',
        'user_last_name',
        'user_email',
        'direccion',
        'especialidad'
    ]; 


}
