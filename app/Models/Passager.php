<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passager extends Model
{
    use HasFactory;

    protected $table='Passager';

    protected $primaryKey ='id';

    protected $timestamps = true;

    protected $formatter='Y-m-d H:i:s';

    protected $fillable = [
        'adresse',
        'mail',
        'telephone',
        'voyage_id'
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
