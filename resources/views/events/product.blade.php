@extends('layouts.main')
@section('title', $event->title)
@section('content')


            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
            </div>
       
            <div class="col-md-12" id="description-container">
                <h3>Sobre o livro:</h3>
                <p class="event-description">{{ $event->autor }}</p>
            </div>
        </div>
    </div>

@endsection
