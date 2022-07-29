@extends('layouts.main')
@section('title', 'Biblioteca add livro')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Adicione  livros</h1>
        <form class="create" action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do livro:</label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="title">Titulo:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="title">Autor:</label>
                <input type="text" class="form-control" id="autor" name="autor" placeholder="Nome do autor">
            </div>
            <div class="form-group">
                <label for="date">Description:</label>
                <input type="text" class="form-control" id="description" name="description" >
            </div>
        
            <div class="form-group">
                <label for="title">Categoria do livro</label>
                <select name="categoria" id="categoria" class="form-control">
                    @foreach ($events as $event)
                    <option value="{{$event->categoria_id}}">{{$event->categoria_id}}</option>
                    {{-- <option value="1">Sim</option> --}}
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar evento">
        </form>

    </div>

@endsection
