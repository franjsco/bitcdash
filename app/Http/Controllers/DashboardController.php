<?php

namespace App\Http\Controllers;

use App\Repositories\{ExtractionRepository, BitcoinRepository};
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index(Request $request)
    {
        $currencyCode =  $request->input('currency', 'usd');

        $extraction = ExtractionRepository::getLatestExtraction();
        
        $bitcoin = BitcoinRepository::getInformationByExtractionId(
            $extraction->extraction_id,
            $currencyCode
        );

        if(!$bitcoin) return;
        
        return view('dashboard')
            ->with('data', $bitcoin)
            ->with('currencyCode', $currencyCode);
    }

}
