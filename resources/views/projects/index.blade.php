@extends('layouts.projects')

@section("titolo", "progetti")

@section("titoloPagina", "I miei projects")
@section("btnCreate")
        <a class="btn btn-primary" href="{{ route('admin.projects.create') }}">Add new project</a>
@endsection

@section('content')



@foreach ($projects as $project)
    <div class="card p-3 m-2">
        <a class="text-decoration-none text-primary" href="{{ route('admin.projects.show', $project->id) }}"> <h2>{{ $project->titolo }}</h2> </a>
        <p>{{ $project->descrizione }}</p>
        <p class="small text-secondary">{{ $project->type->tag}}</p>
    </div>
@endforeach


@endsection