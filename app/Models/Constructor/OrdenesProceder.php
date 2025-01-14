<?php

namespace App\Models\Constructor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenesProceder extends Model
{
    use HasFactory;

    protected $table = 'proceder_ordenes';
    protected $fillable = [
        'documento_id',
        'fecha_orden_proceder',
        'desc_orden_proceder',
        'path_orden_proceder'
    ];
}
