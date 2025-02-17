<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function add(Request $request)
    {
        session(['key' => 'Valeur en session']);
        return "Donnée ajoutée en session.";
    }

    public function view(Request $request)
    {
        return session('key', 'Aucune donnée en session.');
    }

    public function delete(Request $request)
    {
        session()->forget('key');
        return "Donnée supprimée de la session.";
    }
}
