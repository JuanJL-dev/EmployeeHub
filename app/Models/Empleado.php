<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Empleado extends Model
{
    /**
     * Campos asignables masivamente.
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'cargo',
        'salario',
        'activo',
        'departamento_id',
    ];

    /**
     * Casteo de tipos.
     */
    protected $casts = [
        'salario' => 'float',
        'activo'  => 'boolean',
    ];

    /**
     * Un empleado pertenece a un departamento.
     */
    public function departamento(): BelongsTo
    {
        return $this->belongsTo(Departamento::class, 'departamento_id');
    }
}
