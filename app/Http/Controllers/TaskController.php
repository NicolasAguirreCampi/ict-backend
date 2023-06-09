<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Inicializar la consulta de tareas
        $query = Task::query();

        // Filtrar por "completed" si se proporciona en la petición
        if ($request->has('completed')) {
            $completed = $request->input('completed') === 'true';
            $query->where('completed', $completed);
        }

        // Filtrar por "name" si se proporciona en la petición
        if ($request->has('name')) {
            $name = $request->input('name');
            $query->where('name', 'LIKE', "%{$name}%");
        }

        // Obtener todas las tareas que coincidan con los filtros
        $tasks = $query->get();

        return response()->json($tasks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task = Task::create($request->all());
        return response()->json($task, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return response()->json($task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return response()->json($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(null, 204);
    }
}
