<?php

use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filename = database_path('ingredient.txt');
        $fh = fopen($filename,"r");  
        while($data = fgetcsv($fh)){
            $row = array_map( "convert", $data);
            $ing = new \App\Ingredient;
            $ing->id = $row[0];
            $ing->additional = $row[1];
            $ing->amount = $row[2];
            $ing->name = $row[3];
            $ing->drink_id = $row[4];

            $ing->save();
        }
        fclose($fh);
    }
}
