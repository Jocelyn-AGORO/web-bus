<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;

    protected $table='Reservations';

    protected $primaryKey ='id';

    protected $timestamps = true;

    protected $formatter='Y-m-d H:i:s';

    protected $fillable = [
        'id',
        'nom',
        'ville_id'
    ];

    public function ReservationsPassager()
    {
        $this->belongsTo(Passager::class);
    }

    public function ReservationsTickets()
    {
        $this->belongsTo(Tickets::class);
    }

}
