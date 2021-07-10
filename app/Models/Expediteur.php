<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediteur extends Model
{
    use HasFactory;

    protected $table='expediteurs';

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
    ];

    public function ExpediteurColis()
    {
        $this->hasMany(Colis::class);
    }

}
