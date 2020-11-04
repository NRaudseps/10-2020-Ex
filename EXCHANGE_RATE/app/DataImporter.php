<?php


namespace App;

use Sabre\Xml\Service;
use Doctrine\DBAL;

class DataImporter
{
    protected function getDataFromFile(): array
    {
        $xml = file_get_contents('rate.xml');
        $service = new Service();
        $result = $service->parse($xml);

        $data = [];
        for($i = 0; $i < 31; $i++) {
            $data[] = [
                $result[1]['value'][$i]['value'][0]['value'],
                $result[1]['value'][$i]['value'][1]['value']
            ];
        }

        return $data;
    }

    public function saveData()
    {
        $data = self::getDataFromFile();
        foreach ($data as $datum) {
            query()
                ->insert('currency_exchanges')
                ->values([
                    'country' => $datum[0],
                    'exchange_rate' => $datum[1]
                ])
                ->execute();
        }
    }
}