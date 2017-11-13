<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelurahan\DBalitaPuskes as DBalitaPuskes;
use PDF;

class PdfController extends Controller
{
	public function makePDF()
	  {
        $balita = DBalitaPuskes::all();
        view()->share('balita',$balita);
        if($request->has('download')){
            $pdf = PDF::loadView('pdf');
            return $pdf->download('pdf');
        }
        return view('pdf');
    }
}
