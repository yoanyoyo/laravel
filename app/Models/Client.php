<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model {


    use HasFactory;


    Protected $primaryKey='codeReservation';
    Protected $fillabe = ['codeReservation', 'dateReservation', 'dateAller', 'dateRetour'];
    // $timeStamps = false
    public function client(){
    return $this->belongsTo('App\client');}
    public function dossierLocation() {
    return $this->hasOne('App\dossierLocation');}
    public function vehicule() {
    return $this->belongsToMany('App\vehicule');}
}
