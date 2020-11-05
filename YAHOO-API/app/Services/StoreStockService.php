<?php

namespace App\Services;

use App\Models\Stock;
use App\Repository\StockRepository;

class StoreStockService
{
    protected StockRepository $stockRepository;

    public function __construct()
    {
        $this->stockRepository = new StockRepository();
    }

    public function store(Stock $stock)
    {
        $this->stockRepository->save($stock);
    }
}