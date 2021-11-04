<?php

namespace App\Http\Controllers;

use App\Repositories\{ExtractionRepository, BitcoinRepository};

class DashboardController extends Controller
{
    
    public function index()
    {

        $extraction = ExtractionRepository::getLatestExtraction();


        $bitcoin = BitcoinRepository::getInformationByExtractionId($extraction->extraction_id);

        return view('dashboard')->with("data", $bitcoin);
    }

}
