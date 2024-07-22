<?php

namespace App\Functions;

use InvalidArgumentException;

class Helpers{


    public static function getCsvData($filePath){
        $csvData = [];
        //apriamo il file
        //r = read visto che dobbiamo solo leggere il file
        $fileData = fopen($filePath, 'r');
        //se non trovi il file
        if($fileData === false){
            throw new InvalidArgumentException('file not found, check your path');
        }
        //se lo trovi e finchè $csvRow non è false
        while(($csvRow = fgetcsv($fileData)) !== false) {
            // aggiungo il file a csvData
            $csvData[] = $csvRow;
        }
        //chiudiamo il file
        fclose($fileData);
        return $csvData;
    }
}
