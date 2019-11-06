<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notes;

class NotesController extends Controller
{
    //insert notes
    public function store(Request $request)
    {
        $notes = new Notes;
        $notes->title = $request->title;
        $notes->text = $request->text;
        $notes->save();

        return redirect('/home');
    }

    public function getNote($id)
    {
        $note = Notes::find($id);
        return view('view_note')->with('note', $note);
    }

    //get all notes
    public function getAllNotes(Request $request)
    {
        $notes = Notes::all();
        return view('home')->with('notes', $notes);
    }

    //edit note
    public function editNote(Request $request)
    {
        $note = Notes::find($request->id);
        $note->title = $request->title;
        $note->text = $request->text;
        $note->save();

        return redirect('editNote/'.$note->id);
    }

    //delete note
    public function deleteNote($id)
    {
        Notes::find($id)->delete();

        return redirect('/home');
    }
}
