<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Bien;
use App\Models\Imagen;
use Illuminate\Http\Request;

class BienesController extends Controller
{
    public function index()
    {
        return view('dashboard.bienes.index');
    }

    public function printEtiqueta($id)
    {
        $articulo = Bien::find($id);
        $qr_texto = "CORSOAUTO \nIDENTIFICADOR N°: " . strtoupper(verUtf8($articulo->identificador)) . "\nSERIAL: " . strtoupper(verUtf8($articulo->serial)) . " \nTIPO: " . strtoupper(verUtf8($articulo->tipo->nombre)."\nMARCA: ". mb_strtoupper($articulo->marca->nombre)."\nMODELO: ". mb_strtoupper($articulo->modelo->nombre)."\nCOLOR: ".mb_strtoupper($articulo->color->nombre));
        $qr_url = route('etiquetas.web', $id);
        return view('dashboard.bienes.etiquetas.print_etiqueta')
            ->with('texto', $qr_texto)
            ->with('url', $qr_url);
    }

    public function webEtiqueta($id)
    {
        $articulo = Bien::where('id', $id)->first();
        if (!$articulo){
            return redirect()->route('web.index');
        }
        $frontal = Imagen::where('bienes_id', $id)->first();
        $verImagen = null;
        if ($frontal){
            $verImagen = $frontal->mini;
        }
        return view('dashboard.bienes.etiquetas.web_etiqueta')
            ->with('articulo', $articulo)
            ->with('verImagen', $verImagen);
    }

}
