<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
     use HasFactory;

    protected $table='Agence';

    protected $primaryKey ='id';

    protected $timestamps = true;

    protected $formatter='Y-m-d H:i:s';

    protected $fillable = [
        'id',
        'nom',
        'ville_id'
    ];

    public function VilleAgence()
    {
        $this->belongsTo(Ville::class);
    }

    public function AgenceColis()
    {
        $this->hasMany(Colis::class);
    }

}
