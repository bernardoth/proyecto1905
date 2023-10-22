<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Codedge\Fpdf\Fpdf\FPDF;
use Illuminate\Support\Carbon;
use App\Models\Venta;
use App\Models\Cliente;
use Illuminate\Http\Request;

class VentasreporteController extends Controller
{
    //
    protected $pdf;
    public function reportesVentas($a,$b)
    {

        /*
        $listaVentas = Venta::select('ventas.id','ventas.estado','ventas.cliente_id','ventas.updated_at',
        'clientes.nombres','precioventa','cantidad',DB::raw('precioventa *cantidad as total'))
        ->join('clientes','ventas.cliente_id','=','clientes.id')

        ->join('producto_venta','ventas.id','=','producto_venta.venta_id')
        ->whereDate('ventas.updated_at','>=',$a)
        ->whereDate($b,'<=','ventas.updated_at')
        ->groupBy('ventas.id')->get();
        */
        $this->pdf = new myPdf();
        $this->pdf->AddPage('P','Letter');
        $this->pdf->AddFont('Helvetica','','helvetica.php');
        $this->pdf->SetFont('Helvetica','',16);
        //$this->pdf->Cell(100);
        $this->pdf->Cell(0, 30, 'NOTA DE VENTA', 'T', 1, 'C');
        $this->pdf->SetFont('Helvetica','',10);
        $this->pdf->Cell(0, -20, 'informacion adicional', 0, 1, 'C');
        //$this->pdf->Output('S',$nombre->toDateString(),true);
        //$this->pdf->Rect(15,15,20,18,'D');


        $this->pdf->Output();
        exit;
    }
}

class myPdf extends FPDF
{
    function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Evite la impresion innecesaria de este documento',0,0,'C');
}
}
