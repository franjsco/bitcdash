<?php

namespace App\Services;

use Franjsco\Bitcoinfees\Client;

class FeeData 
{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }


    public function getFees()
    {
        return $this->client->getData();
    }
}