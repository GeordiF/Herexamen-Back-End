<?php

namespace App\Http\Controllers;
use App\Note;
use App\Card;
use Illuminate\Http\Request;


class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {

      $this->validate($request, [
        'body' => 'required',
      ]);

      $note = new Note;

      $note->body = $request->body;

      $card->notes()->save($note);

      return back();
    }

    public function edit(Note $note)
    {
      return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
      $this->validate($request, [
        'body' => 'required',
      ]);
      $note->update($request->all());

      return redirect('/cards');
    }
}
