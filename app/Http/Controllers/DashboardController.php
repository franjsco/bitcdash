<?php

namespace App\Http\Controllers;

use App\Repositories\{ExtractionRepository, BitcoinRepository};
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index(Request $request)
    {
        $extraction = ExtractionRepository::getLatestExtraction();
        
        $bitcoin = BitcoinRepository::getInformationByExtractionId(
            $extraction->extraction_id,
            $request->input('currency', 'eur')
        );

        if(!$bitcoin) return;
        
        return view('dashboard')->with("data", $bitcoin);
    }

}
