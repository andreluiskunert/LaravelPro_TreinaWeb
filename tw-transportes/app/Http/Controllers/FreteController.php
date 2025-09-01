<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frete;

class FreteController extends Controller
{
    public function rastrear($codigo)
    {
        // Busca o frete pelo código de rastreio
        $frete = Frete::where('codigo_rastreio', $codigo)->first();

        if (!$frete) {
            return back()->with('error', 'Código de rastreio não encontrado.');
        }

        // Envia o frete para a view
        return view('frete.rastreamento', compact('frete'));
    }
}
