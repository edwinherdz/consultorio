<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function pdf(Consulta $consulta)
    {
        $pdf = Pdf::loadView('pdf.pdf', [
            'consulta'=>$consulta
        ]);
        return $pdf->stream();
    }

    public function pdflist()
    {
        $consultaslist =Consulta::all();
         $pdf= Pdf::loadView('pdf.pdflist', [
            'consultas'=>$consultaslist
        ]);
        return $pdf->stream();
    }
}
