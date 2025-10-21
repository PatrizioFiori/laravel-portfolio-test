@extends('layouts.projects')

@section("titolo", "Modifica un progetto")


@section('content')


    <form action="{{ route('admin.projects.update', $project) }}" method="POST">
        @csrf
        @method("PUT")
        
        <div class="form-control mb-3 d-flex flex-column">
            <label for="titolo"> Titolo progetto</label>
            <input type="text" name="titolo" value="{{$project->titolo}}">
        </div>

        
        <div class="form-control mb-3 d-flex flex-column">
            <label for="tags"> Categorie </label>
            <select name="type_id" id="type_id">
                @foreach($types as $type)
                    <option value="{{$type->id}}" {{$project->type_id == $type->id ? "selected" : "" }}>{{$type->tag}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="descrizione"> Descrizione progetto </label>
            <textarea name="descrizione" id="descrizione" cols="50" rows="5">{{$project->descrizione}}</textarea>
        </div>

        <input type="submit" value="Salva" class="btn btn-primary">
    </form>

@endsection