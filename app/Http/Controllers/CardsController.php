<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Card;

class CardsController extends Controller
{
  public function index()
  {

        $cards = Card::all();
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
      'title' => 'required'
    ]);
    //create a card
    $card = new Card;
    $card->title = $request->input('title');
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
      'title' => 'required'
    ]);
    //create a card
    $card = Card::find($card);
    $card->title = $request->input('title');
    $card->save();

    return redirect('/cards');
  }

  public function destroy(Request $request, $card)
  {
    $card = Card::find($card);
    $card->delete();

    return redirect('/cards');
  }
}
