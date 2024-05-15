<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create()
    {
        return view('note.create');
    }

    public function insert(Request $request)
    {
        Note::create([
            'title' =>$request->title,
            'description'=>$request->description
        ]);
        return redirect()->route('note.index');
    }

    public function edit(Note $note)
    {
        return view('note.edit' , compact('note'));
    }
}
