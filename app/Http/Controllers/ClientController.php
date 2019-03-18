<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function getIndex() {
        return view('clients');
    }

    public function getCreate() {
        return view('clients_new');
    }

    public function editClient() {
        return view('clients_new');
    }

    public function postSave() {

    }
}
