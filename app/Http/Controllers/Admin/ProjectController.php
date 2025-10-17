<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // ==============================  //
    public function index()
    {
        $projects = Project::all();
        return view("projects.index", compact("projects"));
    }

    // ==============================  //
    public function show(Project $project)
    {
        return view("projects.show", compact("project"));
    }

    // ==============================  //
    public function create()
    {
        return view("projects.create");
    }

    // ==============================  //
    public function store(Request $request)
    {
        $data = $request->all();

        $newProject = new Project();

        $newProject->titolo = $data["titolo"];
        $newProject->tags = $data["tags"];
        $newProject->descrizione = $data["descrizione"];

        //dd($newProject);
        $newProject->save();
        return redirect()->route("admin.projects.show", $newProject);
    }

    // ==============================  //
    public function edit(Project $project)
    {
        return view("projects.edit", compact("project"));
    }

    // ==============================  //
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $project->titolo = $data["titolo"];
        $project->tags = $data["tags"];
        $project->descrizione = $data["descrizione"];

        $project->update();
        return redirect()->route("admin.projects.show", $project);
    }

    // ==============================  //
    public function destroy(string $id)
    {
        return "destroy";
    }
}
