<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filename = database_path('ingredient.txt');
        $fh = fopen($filename,"r");
        while($data = fgetcsv($fh)){
            $row = array_map(array($this,'convert'), $data);
            $ing = new \App\Models\Ingredient;
            $ing->id = $row[0];
            $ing->additional = $row[1];
            $ing->amount = $row[2];
            $ing->name = $row[3];
            $ing->drink_id = $row[4];

            $ing->save();
        }
        fclose($fh);
    }
    private function convert( $str ) {
        return iconv( "Windows-1252", "UTF-8", $str );
    }
}
