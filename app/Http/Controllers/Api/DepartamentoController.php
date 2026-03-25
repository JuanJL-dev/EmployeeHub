<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDepartamentoRequest;
use App\Http\Requests\UpdateDepartamentoRequest;
use App\Models\Departamento;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class DepartamentoController extends Controller
{

    // EP-01  GET /api/v1/departamentos

    public function index(): JsonResponse
    {
        $departamentos = Departamento::all();

        return response()->json([
            'status'  => 'success',
            'message' => 'Lista de departamentos obtenida',
            'data'    => $departamentos,
        ], 200);
    }


    // EP-02  POST /api/v1/departamentos

    public function store(StoreDepartamentoRequest $request): JsonResponse
{
    try {
        $data = $request->validated();

        $departamento = Departamento::create($data);

        return response()->json($departamento, 201);

    } catch (\Throwable $e) {
        return response()->json([
            'error' => $e->getMessage(),
            'line' => $e->getLine(),
        ], 500);
    }
}

    // EP-03  GET /api/v1/departamentos/{id}

    public function show(int $id): JsonResponse
    {
        $departamento = Departamento::find($id);

        if (!$departamento) {
            return response()->json([
                'status'  => 'error',
                'message' => "Departamento con id {$id} no encontrado.",
                'data'    => null,
            ], 404);
        }

        return response()->json([
            'status'  => 'success',
            'message' => 'Departamento encontrado',
            'data'    => $departamento,
        ], 200);
    }

    // EP-04  PUT /api/v1/departamentos/{id}

    public function update(UpdateDepartamentoRequest $request, int $id): JsonResponse
    {
        $departamento = Departamento::find($id);

        if (!$departamento) {
            return response()->json([
                'status'  => 'error',
                'message' => "Departamento con id {$id} no encontrado.",
                'data'    => null,
            ], 404);
        }

        $departamento->update($request->validated());

        return response()->json([
            'status'  => 'success',
            'message' => 'Departamento actualizado correctamente',
            'data'    => $departamento->fresh(),
        ], 200);
    }


    // EP-05  DELETE /api/v1/departamentos/{id}

    public function destroy(int $id): JsonResponse
    {
        $departamento = Departamento::find($id);

        if (!$departamento) {
            return response()->json([
                'status'  => 'error',
                'message' => "Departamento con id {$id} no encontrado.",
                'data'    => null,
            ], 404);
        }

        $empleadosActivos = $departamento->empleadosActivos()->count();

        if ($empleadosActivos > 0) {
            return response()->json([
                'status'  => 'error',
                'message' => "No se puede eliminar: el departamento tiene {$empleadosActivos} empleado(s) activo(s) asignado(s).",
                'data'    => null,
            ], 409);
        }

        $nombre = $departamento->nombre;
        $departamento->delete();

        return response()->json([
            'status'  => 'success',
            'message' => "Departamento '{$nombre}' eliminado correctamente",
            'data'    => null,
        ], 200);
    }


    // EP-06  GET /api/v1/departamentos/{id}/empleados

    public function empleados(int $id): JsonResponse
    {
        $departamento = Departamento::find($id);

        if (!$departamento) {
            return response()->json([
                'status'  => 'error',
                'message' => "Departamento con id {$id} no encontrado.",
                'data'    => null,
            ], 404);
        }

        $empleados = $departamento->empleadosActivos()->get([
            'id', 'nombre', 'apellido', 'correo', 'cargo',
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => "Empleados activos del departamento '{$departamento->nombre}'",
            'data'    => $empleados,
        ], 200);
    }
}
