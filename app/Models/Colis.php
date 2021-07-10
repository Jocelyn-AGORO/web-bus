<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colis extends Model
{
    use HasFactory;

    protected $table='colis';

    protected $primaryKey ='id';

    protected $timestamp = true;

    protected $formatter='Y-m-d H:i:s';

    protected $fillable = [
        'id',
        'description',
        'etat'
    ];

    public function ColisExpediteur()
    {
        $this->belongsTo(Expediteur::class);
    }
    public function ColisAgence()
    {
        $this->belongsTo(Agence::class);
    }

}
