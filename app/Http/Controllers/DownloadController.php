<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Response;

class DownloadController extends Controller
{
	public function DownloadPDF(){

		// $data = ['title' => 'Welcome to HDTuto.com'];
		// $pdf = PDF::loadView('cv.cv', $data);
		// return $pdf->download('amsshoyon.pdf');
		// return view('cv.cv');
		$file= public_path(). "/Abdullah_Al_Mamun__CV.pdf";
		$headers = array('Content-Type: application/pdf');
		return Response::download($file, 'Abdullah_Al_Mamun__CV.pdf', $headers);
	}
}
