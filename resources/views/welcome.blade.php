@extends('layouts.main')
@section('title', 'Biblioteca Welcome')

@section('content')


    <div class="search_container">
        <h1>busque um Livro</h1>
        <form method="GET" action="/">
            <input type="text" id="search" name="search"placeholder="Procurar.." required class="input_search">
        </form>
    </div>

    <div class="card_featured">
        @if ($search)
            <h2>Buscando por: {{ $search }}</h2>
            <div class="featured">
                @foreach ($events as $event)
                    <div class="featured_card">
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">
                            <img width="200px" src="img/events/{{ $event->image }}" alt="">

                        </a>
                    </div>
                @endforeach
                @if (count($events) == 0 && $search)
                    <p>Não foi possível encontrar nenhum evento com {{ $search }}!<a href="/">Ver todos!</a></p>
                @elseif(count($events) == 0)
                    <p>Não há eventos disponiveis!</p>
                @endif
            </div>
        @else
            <h2>Todos os livros</h2>


            <div class="featured">
                @foreach ($events as $event)
                    <div class="featured_card">
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">
                            <img width="200px" src="img/events/{{ $event->image }}" alt="">

                        </a>
                    </div>
                @endforeach
                @if (count($events) == 0 && $search)
                    <p>Não foi possível encontrar nenhum evento com {{ $search }}!<a href="/">Ver todos!</a></p>
                @elseif(count($events) == 0)
                    <p>Não há eventos disponiveis!</p>
                @endif
            </div>
            <div class="featured">
                <h2>livros romance</h2>
                @foreach ($romance as $event)
                    <div class="featured_card">
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">
                            <img width="200px" src="img/events/{{ $event->image }}" alt="">
                        </a>
                    </div>
                @endforeach
                @if (count($events) == 0 && $search)
                    <p>Não foi possível encontrar nenhum evento com {{ $search }}!<a href="/">Ver todos!</a></p>
                @elseif(count($events) == 0)
                    <p>Não há eventos disponiveis!</p>
                @endif
            </div>
            <div class="featured">
                <h2>livros de ação</h2>
                @foreach ($action as $event)
                    <div class="featured_card">
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">
                            <img width="200px" src="img/events/{{ $event->image }}" alt="">
                        </a>
                    </div>
                @endforeach
                @if (count($events) == 0 && $search)
                    <p>Não foi possível encontrar nenhum livro com {{ $search }}!<a href="/">Ver todos!</a></p>
                @elseif(count($events) == 0)
                    <p>Não há livros disponiveis!</p>
                @endif
            </div>
        @endif
    </div>

@endsection
