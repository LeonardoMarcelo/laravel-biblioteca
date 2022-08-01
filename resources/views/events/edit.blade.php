@extends('layouts.main')

@section('title', 'Events Editando: ' . $event->title)

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Editando:  {{ $event->title }}</h1>
        <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" id="image" name="image" class="form-control-file">
                <img src="/img/events/{{$event->image}}" width="100px" alt="{{$event->title}}" class="img-preview">
            </div>
            <div class="form-group">
                <label for="title">Titulo:</label>
                <input type="text" class="form-control"  value="{{$event->title}}" id="title" name="title" placeholder="Nome do evento"
                    >
            </div>
            <div class="form-group">
                <label for="title">Autor:</label>
                <input type="text" class="form-control" id="autor" value="{{$event->autor}}" name="autor" placeholder="Nome do autor"
                    >
            </div>
            <div class="form-group">
                <label for="date">Description:</label>
                <textarea name="description" id="description" class="form-control"placeholder="O que vai acontecer no evento">{{$event->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="title">Categoria do livro</label>
                <select name="categoria_id" id="categoria_id" class="form-control">
                    {{-- <option value="1">romance</option> --}}
                    @foreach ($dados as $select)
                        <option value="{{$select->id}}">{{ $select->nome }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Editar evento">
        </form>

    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
{{-- JS DA APLICAÇÃO --}}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
@endsection
