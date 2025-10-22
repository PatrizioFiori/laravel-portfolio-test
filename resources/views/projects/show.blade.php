@extends('layouts.projects')

@section("titolo", "Dettagli progetto")

@section('content')

    <div class="mb-5">
        <h2>{{ $project->titolo }}</h2>
        <p>{{ $project->descrizione }}</p>
        <p class="small bg-dark-subtle">{{ $project->type->type_name}}</p>
        <div>
            @foreach ($project->tags as $tag)
                <span class="badge bg-primary small">{{$tag->tag}}</span>            
            @endforeach
    </div>
    </div>

        <div class="d-flex gap-2">
            <a class="btn btn-outline-secondary text-decoration-none text-black" href="{{ route('admin.projects.index') }}">Back</a>
            <a class="btn btn-outline-warning text-decoration-none text-black" href="{{ route('admin.projects.edit', $project) }}">Modifica</a>

        <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Elimina
            </button>

        <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il project</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Vuoi eliminare il progetto: {{$project->titolo}} ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form action="{{route("admin.projects.destroy", $project)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" class="btn btn-danger" value="Elimina definitivamente">
                            </form>
                        </div>
                        </div>
                    </div>
                </div>   
    
        </div>

@endsection