<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediteur extends Model
{
    use HasFactory;

    protected $table='Expediteur';

    protected $primaryKey ='id';

    protected $timestamps = true;

    protected $formatter='Y-m-d H:i:s';

    protected $fillable = [
        'telephone',
        'adresse',
    ];

    public function ExpediteurColis()
    {
        $this->hasMany(Colis::class);
    }

}
