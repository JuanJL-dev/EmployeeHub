<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmpleadoRequest;
use App\Http\Requests\UpdateEmpleadoRequest;
use App\Models\Empleado;
use Illuminate\Http\JsonResponse;


class EmpleadoController extends Controller
{

    // EP-07  GET /api/v1/empleados

    public function index(): JsonResponse
    {
        $empleados = Empleado::with('departamento:id,nombre')->get();

        return response()->json([
            'status'  => 'success',
            'message' => 'Lista de empleados obtenida',
            'data'    => $empleados,
        ], 200);
    }


    // EP-08  POST /api/v1/empleados
    public function store(StoreEmpleadoRequest $request): JsonResponse
    {
        $empleado = Empleado::create($request->validated());

        return response()->json([
            'status'  => 'success',
            'message' => 'Empleado creado exitosamente',
            'data'    => $empleado->load('departamento:id,nombre'),
        ], 201);
    }


    // EP-09  GET /api/v1/empleados/{id}

    public function show(int $id): JsonResponse
    {
        $empleado = Empleado::with('departamento:id,nombre')->find($id);

        if (!$empleado) {
            return response()->json([
                'status'  => 'error',
                'message' => "Empleado con id {$id} no encontrado.",
                'data'    => null,
            ], 404);
        }

        return response()->json([
            'status'  => 'success',
            'message' => 'Empleado encontrado',
            'data'    => $empleado,
        ], 200);
    }


    // EP-10  PUT /api/v1/empleados/{id}

    public function update(UpdateEmpleadoRequest $request, int $id): JsonResponse
    {
        $empleado = Empleado::find($id);

        if (!$empleado) {
            return response()->json([
                'status'  => 'error',
                'message' => "Empleado con id {$id} no encontrado.",
                'data'    => null,
            ], 404);
        }

        $empleado->update($request->validated());

        return response()->json([
            'status'  => 'success',
            'message' => 'Empleado actualizado correctamente',
            'data'    => $empleado->fresh()->load('departamento:id,nombre'),
        ], 200);
    }

    // EP-11  DELETE /api/v1/empleados/{id}  — Baja lógica

    public function destroy(int $id): JsonResponse
    {
        $empleado = Empleado::find($id);

        if (!$empleado) {
            return response()->json([
                'status'  => 'error',
                'message' => "Empleado con id {$id} no encontrado.",
                'data'    => null,
            ], 404);
        }

        if (!$empleado->activo) {
            return response()->json([
                'status'  => 'error',
                'message' => "El empleado con id {$id} ya se encuentra dado de baja.",
                'data'    => null,
            ], 400);
        }

        // Baja lógica: solo se cambia activo a false
        $empleado->update(['activo' => false]);

        return response()->json([
            'status'  => 'success',
            'message' => "Empleado con id {$id} dado de baja correctamente",
            'data'    => null,
        ], 200);
    }
}
