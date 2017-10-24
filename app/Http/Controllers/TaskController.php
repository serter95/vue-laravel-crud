<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tasks=Task::orderBy('id','DESC')->paginate(7);
        return [
          'pagination' => [
            'total'=>$tasks->total(),
            'current_page'=>$tasks->currentPage(),
            'per_page'=>$tasks->perPage(),
            'last_page'=>$tasks->lastPage(),
            'from'=>$tasks->firstItem(),
            'to'=>$tasks->lastPage(),
          ],
          'tasks' => $tasks,
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        //Formulario SIN USO
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'keep' => 'required'
        ]);

        Task::create($request->all());

        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    /*
    public function show(Task $task)
    {
        // SIN USO
    }
    */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    /*public function edit(Task $task)
    {
        // Formulario SIN USO
        return $task;
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'keep' => 'required',
        ]);

        Task::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $task=Task::findOrFail($id);
      $task->delete();
    }
}
