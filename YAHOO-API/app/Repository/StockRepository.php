<?php

namespace App\Repository;

use App\Models\Stock;
use Carbon\Carbon;

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
                'volume' => '?',
                'updated_at' => '?'
            ])
            ->setParameter(0, $stock->symbol())
            ->setParameter(1, $stock->name())
            ->setParameter(2, $stock->open())
            ->setParameter(3, $stock->close())
            ->setParameter(4, $stock->volume())
            ->setParameter(5, $stock->timeStamp())
            ->execute();
    }

    public function update(Stock $stock)
    {
        query()
            ->update('stocks')
            ->set('symbol', ':symbol')
            ->set('name', ':name')
            ->set('open', ':open')
            ->set('close', ':close')
            ->set('volume', ':volume')
            ->set('updated_at', 'updated_at')
            ->where('symbol = :symbol')
            ->setParameter('symbol', $stock->symbol())
            ->setParameter('name', $stock->name())
            ->setParameter('open', $stock->open())
            ->setParameter('close', $stock->close())
            ->setParameter('volume', $stock->volume())
            ->setParameter('updated_at', Carbon::now('Europe/London')->toDateTimeString())
            ->execute();
    }
}