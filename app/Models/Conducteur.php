<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conducteur extends Model
{
    use HasFactory;

    protected $table='Conducteur';

    protected $primaryKey ='id';

    protected $timestamps = true;

    protected $formatter='Y-m-d H:i:s';

    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'adresse',
        'satut'
    ];

    public function ConducteurVoyage()
    {
        $this->hasMany(Voyage::class);
    }

}
