@extends('layouts.main')
@section('title', 'Biblioteca add livro')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Adicione livros</h1>
        <form class="create" action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do livro:</label>
                <input type="file" id="image" name="image" class="form-control-file" required>
            </div>
            <div class="form-group">
                <label for="title">Titulo:</label>
                <input type="text" class="form-control" id="title" name="title"  placeholder="Nome do evento"
                    required>
            </div>
            <div class="form-group">
                <label for="title">Autor:</label>
                <input type="text" class="form-control" id="autor" name="autor" placeholder="Nome do autor"
                    required>
            </div>
            <div class="form-group">
                <label for="date">Description:</label>
                <input type="text" class="form-control" id="description" name="description" " placeholder="Descrição do livro" required>
            </div>

            <div class="form-group">
                <label for="title">Categoria do livro</label>
                <select name="categoria" id="categoria" class="form-control">
                    {{-- <option value="1">romance</option> --}}
                    @foreach ($events as $event)
                        <option value="{{ $event->id }}">{{ $event->nome }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar evento">
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
