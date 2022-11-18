<?php

namespace App\Http\Controllers;

use App\Models\Projects;

use Illuminate\Http\Request;

use App\Http\Requests\SaveProjectRequest;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;



class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('show', 'index');
    }


    public function index()
    {

        $projects = Projects::get();

        return view('projects.index', compact('projects'));
    }




    public function show(Projects $project) //route model binding buscar por ruta
    {
        /*  1 opcion para retornar la vista de contenido del proyecto */
        /* $project = Projects::findOrFail($project); */

        return view('projects.show', [

            'project' => $project
        ]);

        /* return view('projects.show',[ 'projects' => Projects::findOrFail($id)]); */
    }




    public function create()
    {
        return view('projects.create');
    }




    /* almacenar proyectos en la base de datos */
    public function store(SaveProjectRequest $request)
    {
        /* nueva instancia modelo project */
        $project = new Projects($request->validated());
        /* asignar imagen desde su direccion de almaceamiento */
        $project->image = $request->file('image')->store('images');

        $project->save();

        /* luego redireccionamos a la pagina index una vez creado el proyecto */

        return redirect()->route('projects.index')->with('status', 'el proyecto fue creado con exito');
    }



    public function edit(Projects $project) //parametros 1-recibimos el proyecto 2-la url el parametro.
    {
        return view('projects.edit', [

            'project' => $project
        ]);
    }


    public function update(Projects $project, SaveProjectRequest $request)
    {
        if ($request->hasFile('image')) {
            Storage::delete($project->image);

            $project->fill($request->validated());

            $project->image = $request->file('image')->store('images');

            $project->save();
        } else {
            $project->update(array_filter($request->validated()));
        }

        return redirect()->route('projects.show', $project)->with('status', 'el proyecto fue actualizado con exito');
    }

    public function destroy(Projects $project)
    {
        Storage::delete($project->image);

        $project->delete();

        return redirect()->route('projects.index')->with('status', 'el proyecto fue eliminado con exito');
    }
}
