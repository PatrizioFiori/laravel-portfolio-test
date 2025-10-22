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
                    <option value="{{$type->id}}">{{$type->type_name}}</option>
                @endforeach
            </select>
        </div>

                {{-- tags --}}
        <div class="form-control mb-3 d-flex flex-wrap">
            @foreach($tags as $tag)
            <div class="tag me-2">
                <input type="checkbox" id="tag-{{$tag->id}}" name="tags[]" value="{{$tag->id}}" {{$project->tags->contains($tag->id) ? "checked" : ""}}>
                <label for="tag-{{$tag->id}}">{{$tag->tag}}</label>
            </div>

            @endforeach
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="descrizione"> Descrizione progetto </label>
            <textarea name="descrizione" id="descrizione" cols="50" rows="5">{{$project->descrizione}}</textarea>
        </div>

        <input type="submit" value="Salva" class="btn btn-primary">
    </form>

@endsection