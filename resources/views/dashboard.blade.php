

<x-app-layout>
    <x-slot name="header">
     
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        {{-- <div class="col-md-10 offset-md-1 dashboard-events-container">
            @if (count($event) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome:</th>
                            <th scope="col">autor</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
    
                    <tbody>
                        @foreach ($event as $events)
                            <tr>
                                <td scope="row">{{ $loop->index + 1 }}</td>
                                <td><a href="/events/{{ $event->id }}">{{ $events->title }}</a></td>
                                <td>{{ count($events->title) }}</td>
                                <td>
                                    <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn">
                                        <ion-icon name="create-outline"></ion-icon>Editar
                                    </a>
                                    <form action="/events/{{ $event->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger delete-btn">
                                            <ion-icon name="trash-outline"></ion-icon>Deletar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Você ainda não tem livros, <a href="/events/create">Adicionar livros</a></p>
            @endif
        </div> --}}
    </x-slot>

   
</x-app-layout>


