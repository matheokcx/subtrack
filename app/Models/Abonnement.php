<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model {

    use HasFactory;

    protected $fillable = ['nom', 'mensualite', 'date_mensualite', 'id_user'];

    protected $casts = [
        'mensualite' => 'float',
        'date_mensualite' => 'datetime',
        'id_user' => 'int',
    ];

    protected function users () : void {
        $this->hasOne('App\Models\User');
    }

}
