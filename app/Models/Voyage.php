<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Voyage extends Model
{
    use HasFactory;

    protected $table='Voyage';

    protected $primaryKey ='id';

    protected $timestamps = true;

    protected $formatter='Y-m-d H:i:s';

    protected $fillable = [
        'id',
        'date',
        'duree_voyage',
        'conducteur_id',
        'bus_id',
        'passager_id',
        'ville_id'
    ];

    public function VoyageBus()
    {
        $this->belongsTo(Bus::class);
    }

    public function VoyageConducteur()
    {
        $this->belongsTo(Conducteur::class);
    }

    public function VoyagePassager()
    {
        $this->hasMany(Passager::class);
    }

    public function VoyageVille()
    {
        $this->hasMany(Ville::class);
    }

    public function VoyageTickets()
    {
        $this->hasMany(Tickets::class);
    }

}
