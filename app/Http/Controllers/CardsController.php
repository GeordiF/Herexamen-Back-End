<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Card;

class CardsController extends Controller
{
  public function index()
  {

        $cards = Card::all()->where('isDone', '0');
        return view('cards.index', compact('cards'));
  }

  public function show($card)
  {

    $card = Card::find($card);
    return view('cards.show', compact('card')); //compact -> array cards
  }

  public function create()
  {
    return view('cards.create', compact('create'));
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'title' => 'required',
      'body' => 'required',
      'date' => 'required'
    ]);
    //create a card
    $card = new Card;
    $card->title = $request->input('title');
    $card->body = $request->input('body');
    $card->date = $request->input('date');
    $card->isDone = $request->input('isDone');
    $card->save();

    return back();
  }

  public function edit($card)
  {
    $card = Card::find($card);
    return view('cards.edit', compact('card'));
  }

  public function update(Request $request, $card)
  {
    $this->validate($request, [
      'title' => 'required',
      'body' => 'required',
      'date' => 'required'
    ]);
    //update a card
    $card = Card::find($card);
    $card->title = $request->input('title');
    $card->body = $request->input('body');
    $card->isDone = $request->input('isDone');
    $card->date = $request->input('date');
    $card->save();

    return redirect('/cards');
  }

  public function destroy(Request $request, $card)
  {
    $card = Card::find($card);
    $card->delete();

    return redirect('/cards');
  }

  public function done()
  {
    $cards = Card::all()->where('isDone', '1');
    return view('cards.done', compact('cards'));
  }
}
