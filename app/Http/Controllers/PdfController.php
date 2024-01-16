<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class PdfController extends Controller
{
    function getPdf(){

        $pdf = Pdf::loadView('pdf')->setPaper('a4', 'portrait')->setWarnings(false)->save('pdf.pdf');
        return $pdf->download('pdf.pdf');
    }
}
