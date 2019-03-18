<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    //
    public function getReservations() {
        return view('reservations');
    }

    public function getCreate() {
        return view('book_room');
    }

    public function getEdit() {
        return view('book_room');
    }

    public function postSave() {

    }
}
