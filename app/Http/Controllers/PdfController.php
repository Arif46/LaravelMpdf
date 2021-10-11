<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function createPdf()
    {
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 12,
            'default_font' => 'nikosh'
        ]);
        
        $mpdf->WriteHTML($this->pdfHTML());
        $mpdf->Output();
    }

    public function pdfHTML()
    {
        $output = 'আরিফুজ্জামান Arifuzzaman';
        return $output;
    }
}
