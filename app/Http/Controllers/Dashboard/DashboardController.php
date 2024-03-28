<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Estado;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function prueba()
    {
        $estados = dataTerritorio()[3];
        return view('dashboard.pagina_pruebas')
            ->with('estados', $estados);
    }
}
