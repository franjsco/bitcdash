<?php

namespace App\Api;

use Franjsco\Bitcoinfees\Client;

class FeeAPI
{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }


    public function getRecommendedFees()
    {
        return $this->client->getData();
    }
}