<?php

namespace App\Controllers;

use Scheb\YahooFinanceApi\ApiClient;
use Scheb\YahooFinanceApi\ApiClientFactory;
use App\Models\Stock;

class StockController
{
    public function search()
    {
        return require_once __DIR__ . '/../Views/StockSearchView.php';
    }

    public function show()
    {
//      Create a new client from the factory
        $client = ApiClientFactory::createApiClient();

//      Returns an array of Scheb\YahooFinanceApi\Results\SearchResult
        $name = htmlspecialchars($_GET['name']);
        $searchResult = $client->search($name)[0];
        $historicalData = $client->getHistoricalData($name, ApiClient::INTERVAL_1_DAY,
            new \DateTime("-14 days"), new \DateTime("today"))[0];

        $stock = new Stock(
            $searchResult->getSymbol(),
            $searchResult->getName(),
            $historicalData->getOpen(),
            $historicalData->getClose(),
            $historicalData->getVolume()
        );

        return require_once __DIR__ .  '/../Views/StockShowView.php';
    }
}