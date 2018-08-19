<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
  use SoftDeletes;
  protected $table = 'cards';
  const DATE = ['date'];
  protected $fillable = ['title'];
  const BODY = ['body'];
  protected $dates = ['deleted_at'];

  public function notes()
  {
    return $this->hasMany(Note::class);
  }
}
