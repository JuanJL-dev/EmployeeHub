<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departamento extends Model
{
    /**
     * Campos asignables masivamente.
     */
    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    /**
     * Un departamento tiene muchos empleados.
     */
    public function empleados(): HasMany
    {
        return $this->hasMany(Empleado::class, 'departamento_id');
    }

    /**
     * Empleados activos del departamento.
     */
    public function empleadosActivos(): HasMany
    {
        return $this->hasMany(Empleado::class, 'departamento_id')
                    ->where('activo', true);
    }
}
