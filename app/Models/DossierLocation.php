<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dossierLocation extends Model {
   
    use HasFactory;


    Protected $primaryKey='idLocation';
    Protected $fillabe = ['idLocation', 'paye'];
    public function reservation() {
    return $this->belongTo('App\reservation');}
    }

