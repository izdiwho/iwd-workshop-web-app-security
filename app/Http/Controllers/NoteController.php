<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    // notes
    public function notes(Request $request)
    {
        $orderParam = $request->get('sort');

        $data = $orderParam ?
        \App\Models\Note::query()->where('user_id', $request->user()->id)->orderByRaw($orderParam)->get() :
        \App\Models\Note::where('user_id', $request->user()->id)->get();

        // FIX
        // $data = $orderParam ?
        // \App\Models\Note::where('user_id', $request->user()->id)->orderBy($orderParam)->get() :
        // \App\Models\Note::where('user_id', $request->user()->id)->get();

        return view('index', ['notes' => $data]);
    }

    // view note
    public function view($id)
    {
        $note = \App\Models\Note::findOrFail($id);

        // FIX
        // $note = \App\Models\Note::where('id', $id)->where('user_id', auth()->user()->id)->firstOrFail();

        return view('view', ['note' => $note]);
    }

    public function create()
    {
        return view('create');
    }

    // create note
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $note = new \App\Models\Note;
        $note->title = $request->title;
        $note->body = $request->body;
        $note->user_id = $request->user()->id;
        $note->save();

        return redirect()->route('notes.index');
    }

    // delete note
    public function delete($id)
    {
        $note = \App\Models\Note::findOrFail($id);

        // FIX
        // $note = \App\Models\Note::where('id', $id)->where('user_id', auth()->user()->id)->firstOrFail();

        $note->delete();

        return redirect()->route('notes.index');
    }

}
