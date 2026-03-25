<?php


use App\Http\Controllers\Api\DepartamentoController;
use App\Http\Controllers\Api\EmpleadoController;
use Illuminate\Support\Facades\Route;

// Ruta de bienvenida
Route::get('/', function () {
    return response()->json([
        'status'  => 'success',
        'message' => 'Bienvenido a EmployeeHub API v1.0',
        'data'    => [
            'version'  => '1.0.0',
            'framework' => 'Laravel 11',
        ],
    ]);
});

// Grupo con prefijo v1
Route::prefix('v1')->group(function () {

    // ── Departamentos ─────────────────────────────────────────────────────
    Route::get('departamentos',                    [DepartamentoController::class, 'index']);
    Route::post('departamentos',                   [DepartamentoController::class, 'store']);
    Route::get('departamentos/{departamento}',     [DepartamentoController::class, 'show']);
    Route::put('departamentos/{departamento}',     [DepartamentoController::class, 'update']);
    Route::delete('departamentos/{departamento}',  [DepartamentoController::class, 'destroy']);
    Route::get('departamentos/{departamento}/empleados', [DepartamentoController::class, 'empleados']);

    // ── Empleados ─────────────────────────────────────────────────────────
    Route::get('empleados',             [EmpleadoController::class, 'index']);
    Route::post('empleados',            [EmpleadoController::class, 'store']);
    Route::get('empleados/{empleado}',  [EmpleadoController::class, 'show']);
    Route::put('empleados/{empleado}',  [EmpleadoController::class, 'update']);
    Route::delete('empleados/{empleado}', [EmpleadoController::class, 'destroy']);
});
