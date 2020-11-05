<?php


namespace App\Services;

use App\Repository\StockRepository;
use App\Models\Stock;
use Scheb\YahooFinanceApi\ApiClient;
use Scheb\YahooFinanceApi\ApiClientFactory;

class GetStockModelService
{
    protected StockRepository $stockRepository;

    public function __construct()
    {
        $this->stockRepository = new StockRepository();
    }

    public function getModel(string $symbol): Stock
    {
        $dbData = $this->stockRepository->getBySymbol($symbol)[0];
//        die(var_dump($dbData));

        if(empty($dbData)) {
            $client = ApiClientFactory::createApiClient();

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
        }
        else {

            $stock = new Stock(
                $dbData['symbol'],
                $dbData['name'],
                (float) $dbData['open'],
                (float) $dbData['close'],
                (int) $dbData['volume'],
            );
        }

        $this->stockRepository->save($stock);

        return $stock;
    }
}