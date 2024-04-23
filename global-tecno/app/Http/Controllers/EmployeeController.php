<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee as Empleados;
use App\Http\Requests\EmployeesRequest;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $empleados = Empleados::all();

       return response()->json($empleados);

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        // Validar y guardar los datos del nuevo empleado
        $validatedData = $request->validated(); // Obtener los datos validados del Request
    
        // Crear un nuevo empleado con los datos validados
        $employee = new Employee();
        $employee->fill($validatedData); // Llenar el modelo con los datos validados
        $employee->save(); // Guardar el nuevo empleado en la base de datos
    
        // Retornar una respuesta con el empleado creado y el código de estado 201 (Created)
        return response()->json($employee, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    use App\Models\Employee;
    use App\Http\Requests\EmployeeRequest;
    
    public function update(EmployeeRequest $request, Employee $employee)
    {
        // Validar y actualizar los datos del empleado
        $validatedData = $request->validated(); // Obtener los datos validados del Request
    
        // Actualizar los atributos del empleado con los datos validados
        $employee->fill($validatedData); // Llenar el modelo con los datos validados
        $employee->save(); // Guardar los cambios en la base de datos
    
        // Retornar una respuesta con el empleado actualizado
        return response()->json($employee);
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
