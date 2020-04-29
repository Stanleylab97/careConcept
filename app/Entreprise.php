<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libelle', 'description', 'slogan', 'tel', 'email','site'
    ];
}
