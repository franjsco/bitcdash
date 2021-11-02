<?php

namespace App\Repositories;

use App\Models\Extraction;
use Illuminate\Database\Eloquent\Collection;

class ExtractionRepository
{
    /**
     * @return Collection
     */
    public static function getExtractions(): Collection
    {   
        return Extraction::all();
    }


    /**
     * @param int $id
     * @return Extraction
     */
    public static function getEtractionById(int $id): Extraction
    {
        return Extraction::find($id);
    }


    /**
     * @param string $uuid
     * @return Extraction
     */
    public static function getExtractionByUuid(string $uuid): Extraction
    {
        return Extraction::whereExtractionId($uuid)->first();
    }

    
    /**
     * @return Extraction
     */
    public static function getLatestExtraction(): Extraction
    {
        return Extraction::orderByDesc('created_at')->first();
    }

}