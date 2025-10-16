@extends('layouts.projects')

@section("titolo", "progetti")

@section('content')



@foreach ($projects as $project)
    <h2>{{ $project->titolo }}</h2>
    <p>{{ $project->descrizione }}</p>
    <p class="small bg-dark-subtle">{{ $project->tags}}</p>
    <button><a href="{{ route('admin.projects.show', $project->id) }}">INFO</a></button>

@endforeach

@endsection