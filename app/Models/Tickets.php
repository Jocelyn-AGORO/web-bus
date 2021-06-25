<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;

    protected $table='Tickets';

    protected $primaryKey ='id';

    protected $timestamps = true;

    protected $formatter='Y-m-d H:i:s';

    protected $fillable = [
        'id',
        'reference',
        'prix'
    ];

    public function TicketsReservations()
    {
        $this->belongsTo(Reservations::class);
    }

    public function TicketsVoyage()
    {
        $this->belongsTo(Voyage::class);
    }

}
