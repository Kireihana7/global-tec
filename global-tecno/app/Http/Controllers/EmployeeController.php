<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $empleados = Employee::all();
            return response()->json($empleados);
        } catch (\Exception $e) {
            // Manejar la excepción, por ejemplo, registrándola o devolviendo un mensaje de error
            return response()->json(['error' => 'Error al obtener la lista de empleados'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        try {
            // Iniciar una transacción
            DB::beginTransaction();

            // Validar y guardar los datos del nuevo empleado
            $validatedData = $request->validated(); // Obtener los datos validados del Request
            $employee = new Employee();
            $employee->fill($validatedData); // Llenar el modelo con los datos validados
            $employee->save(); // Guardar el nuevo empleado en la base de datos

            // Commit de la transacción si todas las operaciones fueron exitosas
            DB::commit();

            // Retornar una respuesta con el empleado creado y el código de estado 201 (Created)
            return response()->json($employee, 201);
        } catch (\Exception $e) {
            // Rollback de la transacción en caso de error
            DB::rollback();
            // Manejar la excepción, por ejemplo, registrándola o devolviendo un mensaje de error
            return response()->json(['error' => 'Error al guardar el empleado'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        try {
            // Iniciar una transacción
            DB::beginTransaction();

            // Validar y actualizar los datos del empleado
            $validatedData = $request->validated(); // Obtener los datos validados del Request
            $employee->fill($validatedData); // Llenar el modelo con los datos validados
            $employee->save(); // Guardar los cambios en la base de datos

            // Commit de la transacción si todas las operaciones fueron exitosas
            DB::commit();

            // Retornar una respuesta con el empleado actualizado
            return response()->json($employee);
        } catch (\Exception $e) {
            // Rollback de la transacción en caso de error
            DB::rollback();
            // Manejar la excepción, por ejemplo, registrándola o devolviendo un mensaje de error
            return response()->json(['error' => 'Error al actualizar el empleado'], 500);
        }
    }
}
