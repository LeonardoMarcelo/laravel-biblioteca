<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class EventController extends Controller
{
    //

    public function index()
    {
        $search = request('search');

        if ($search) {
            $event = Event::where([
                ['title', 'like', '%' . $search . '%']
            ])->get();
         $romance = $event;
         $action  = $event;

        } else {
            $event = Event::all();

            $romance = DB::select('SELECT *, categorias.nome AS nome, events.id AS id FROM events INNER JOIN categorias ON events.categoria_id = categorias.id WHERE events.categoria_id = 1');
            $action = DB::select('SELECT *, categorias.nome AS nome, events.id AS id FROM events INNER JOIN categorias ON events.categoria_id = categorias.id WHERE events.categoria_id = 2');
        }
        return view(

            'welcome',
            [
                'events' => $event,
                'search' => $search,
                'romance' => $romance,
                'action' => $action
            ]
        );
    }
    public function product($id)
    {
        $event = Event::findOrFail($id);

        return view('events.product', ['event' => $event]);
    }



    public function create()
    {
        $event = DB::select('SELECT * FROM categorias');
        return view('events.create', ['events' => $event]);
    }

    public function store(Request $request)
    {

        $event = new Event;
        $event->title = $request->title;
        $event->autor = $request->autor;
        $event->description = $request->description;
        $event->categoria_id = $request->categoria;

        //image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }



        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function dashboard()
    {
        $events =  Event::all();

        return view('events.dashboard', ['events' => $events]);
    }

    public function destroy($id)
    {
        Event::findOrFail($id)->delete();
        return redirect('/dashboard')->with('msg', 'Evento excluido com sucesso!');
    }

    public function edit($id)
    {
        $user = auth()->user();
        $event = Event::findOrFail($id);
        $dados = DB::select('SELECT * FROM categorias');


        return view('events.edit', ['event' => $event, 'dados' => $dados]);
    }
    public function update(Request $request)
    {
        $data =  $request->all();

        //image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);

            $data['image'] = $imageName;
        }
        Event::findOrFail($request->id)->update($data);
        return redirect('/dashboard')->with('msg', 'Evento editado com sucesso!');
    }
}
