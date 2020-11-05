<?php


namespace App\Services;

use App\Repository\StockRepository;
use App\Models\Stock;
use Scheb\YahooFinanceApi\ApiClient;
use Scheb\YahooFinanceApi\ApiClientFactory;
use Carbon\Carbon;

class GetStockModelService
{
    protected StockRepository $stockRepository;

    public function __construct()
    {
        $this->stockRepository = new StockRepository();
    }

    public function getModel(string $symbol): Stock
    {
        $name = htmlspecialchars($symbol);
        $dbData = $this->stockRepository->getBySymbol($symbol)[0];
        $dt = (Carbon::create($dbData['updated_at']));

        if (empty($dbData) || ($dt->diffInMinutes(Carbon::now('Europe/London')) - 120 > -1)) {
            $client = ApiClientFactory::createApiClient();

            $searchResult = $client->search($name)[0];
            $historicalData = $client->getHistoricalData($name, ApiClient::INTERVAL_1_DAY,
                new \DateTime("-14 days"), new \DateTime("today"))[0];

            $stock = new Stock(
                $searchResult->getSymbol(),
                $searchResult->getName(),
                $historicalData->getOpen(),
                $historicalData->getClose(),
                $historicalData->getVolume(),
                Carbon::now('Europe/London')
            );

            (new StoreStockService)->store($stock);
        } else {
            $stock = new Stock(
                $dbData['symbol'],
                $dbData['name'],
                (float)$dbData['open'],
                (float)$dbData['close'],
                (int)$dbData['volume'],
                $dt
            );
        }

        return $stock;
    }
}