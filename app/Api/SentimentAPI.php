<?php

namespace App\Api;

use Franjsco\CryptoFearGreedIndex\Client;

class SentimentAPI
{

    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }


    public function getSentiment()
    {
        return $this->client->getData();
    }
}