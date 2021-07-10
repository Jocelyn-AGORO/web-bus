<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $table='villes';

    protected $primaryKey ='id';

    protected $timestamp = true;

    protected $formatter='Y-m-d H:i:s';

    protected $fillable = [
        'id',
        'nom',
        'voyage_id'
    ];

    public function AgenceVille()
    {
        $this->hasMany(Agence::class);
    }
}
