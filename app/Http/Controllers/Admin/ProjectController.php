<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Tag;
use App\Models\Type;
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
        $types = Type::all();
        $tags = Tag::all();
        return view("projects.create", compact("types", "tags"));
    }

    // ==============================  //
    public function store(Request $request)
    {
        $data = $request->all();
        $newProject = new Project();

        $newProject->titolo = $data["titolo"];
        $newProject->type_id = $data["type_id"];
        $newProject->descrizione = $data["descrizione"];

        //dd($newProject);
        $newProject->save();

        $newProject->tags()->attach($data["tags"]);
        return redirect()->route("admin.projects.show", $newProject);
    }

    // ==============================  //
    public function edit(Project $project)
    {
        $types = Type::all();
        return view("projects.edit", compact("project", "types"));
    }

    // ==============================  //
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $project->titolo = $data["titolo"];
        $project->type_id = $data["type_id"];
        $project->descrizione = $data["descrizione"];

        $project->update();
        return redirect()->route("admin.projects.show", $project);
    }

    // ==============================  //
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route("admin.projects.index");
    }
}
