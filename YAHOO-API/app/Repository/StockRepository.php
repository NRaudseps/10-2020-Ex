<?php

namespace App\Repository;

use App\Models\Stock;

class StockRepository
{
    public function getBySymbol(string $symbol): array
    {
        return query()
            ->select('*')
            ->from('stocks')
            ->where('symbol = ?')
            ->setParameter(0, $symbol)
            ->execute()
            ->fetchAllAssociative();
    }

    public function save(Stock $stock)
    {
        query()
            ->insert('stocks')
            ->values([
                'symbol' => '?',
                'name' => '?',
                'open' => '?',
                'close' => '?',
                'volume' => '?'
            ])
            ->setParameter(0, $stock->symbol())
            ->setParameter(1, $stock->name())
            ->setParameter(2, $stock->open())
            ->setParameter(3, $stock->close())
            ->setParameter(4, $stock->volume())
            ->execute();
    }
}