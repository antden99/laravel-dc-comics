<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsList = Comic::all(); //con questa query recupero tutti i campi della tabella comic all'interno del mio DB.
        //dd($comicsList);
        return view('comics.index', compact('comicsList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        //$data contiene tutti i dari forniti nel form di tipo Post
        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->save(); //ricordati sempre di salvare altrimenti la nuova istanza non viene creata


        //dopo aver salvato dobbiamo fare un redirect() perchè altrimenti potremmo incorrere in un loop con il form
        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //dd($request->all());  $request->all() contiene tutti i cambi che io voglio effettuare 

        $data = $request->all();

        $comic->update($data); //facendo questo passaggio, avrai problemi con le fillable, perche stai aggiornando tutti i campi contemporaneamente, e di conseguenza ricorda di andare nel modello Comic e aggiungere la protected

        return to_route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index');
    }
}
