<?php

namespace App\Controllers;


use App\Services\StoreStockService;
use App\Services\GetStockModelService;
use App\Models\Stock;

class StockController
{
    public function search()
    {
        return require_once __DIR__ . '/../Views/StockSearchView.php';
    }

    public function show()
    {
        $name = htmlspecialchars($_GET['name']);

        $stock = (new GetStockModelService())->getModel($name);

        return require_once __DIR__ .  '/../Views/StockShowView.php';
    }
}