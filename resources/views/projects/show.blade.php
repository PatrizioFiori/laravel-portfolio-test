@extends('layouts.projects')

@section("titolo", "Dettagli progetto")

@section('content')
    <button><a href="{{ route('admin.projects.index') }}"><=</a></button>

    <h2>{{ $project->titolo }}</h2>
    <p>{{ $project->descrizione }}</p>
    <p class="small bg-dark-subtle">{{ $project->tags}}</p>

@endsection