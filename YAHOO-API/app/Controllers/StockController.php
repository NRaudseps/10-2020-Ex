<?php

namespace App\Controllers;

use Scheb\YahooFinanceApi\ApiClient;
use Scheb\YahooFinanceApi\ApiClientFactory;

class StockController
{
    public function search()
    {
//      Create a new client from the factory
        $client = ApiClientFactory::createApiClient();

//      Returns an array of Scheb\YahooFinanceApi\Results\SearchResult
        $searchResult = $client->search("Apple");

        return require_once __DIR__ .  '/../Views/StockSearchView.php';
    }
}