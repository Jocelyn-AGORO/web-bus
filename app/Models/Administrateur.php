<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    use HasFactory;

    protected $table ='administrateurs';

    protected $primaryKey= 'id';

    public $timestamps = true;

    protected $formatter='Y-m-d H:i:s';

    protected $fillable = [
        'id',
        'nom',
        'pass',
        'role'
    ];

    public function AdministrateurVoyage()
    {
        $this->hasMany(Voyage::class);
    }

}
