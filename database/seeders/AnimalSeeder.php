<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use InvalidArgumentException;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        $animalsData = $this->getCsvData(__DIR__ . '/animals.csv');
        foreach ($animalsData as $index => $singleAnimalData) {
            if ($index > 0){
                $newAnimal = new Animal();
                $newAnimal->scientific_name = $singleAnimalData[0];
                $newAnimal->common_name = $singleAnimalData[1];
                $newAnimal->name = $singleAnimalData[2];
                $newAnimal->birthday = $singleAnimalData[3];
                $newAnimal->taxonomic_group = $singleAnimalData[4];
                $newAnimal->class = $singleAnimalData[5];
                $newAnimal->family = $singleAnimalData[6];
                $newAnimal->species = $singleAnimalData[7];
                $newAnimal->habitat = $singleAnimalData[8];
                $newAnimal->protected = $singleAnimalData[9];
                $newAnimal->save();
            }
        }
    }

    public function getCsvData($filePath){
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
