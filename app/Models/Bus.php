<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $table='buses';

    protected $primaryKey ='id';

    protected $timestamp = true;

    protected $formatter='Y-m-d H:i:s';

    protected $fillable = [
        'id',
        'code',
        'capacite',
        'etat'
    ];

    public function BusVoyage()
    {
        $this->hasMany(Voyage::class);
    }
}
