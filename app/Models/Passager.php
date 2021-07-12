<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passager extends Model
{
    use HasFactory;

    protected $table='passagers';

    protected $primaryKey ='id';

    protected $timestamp = true;

    protected $formatter='Y-m-d H:i:s';

    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'profession',
        'adresse',
        'mail',
        'telephone',
        'connecte'
    ];

    public function PassagerVoyage()
    {
        $this->belongsTo(Voyage::class);
    }

    public function PassagerReservations()
    {
        $this->hasMany(Reservations::class);
    }

}
