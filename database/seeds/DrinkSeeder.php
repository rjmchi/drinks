<?php

use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filename = database_path('drink.txt');
        $fh = fopen($filename,"r");  
        while($data = fgetcsv($fh)){
            $row = array_map( "convert", $data);
            $drink = new \App\Drink;
            $drink->id = $row[0];
            $drink->name = strtolower(htmlentities($row[1]));
            $drink->glass = strtolower(htmlentities($row[2]));
            $drink->method_id = $row[3];
            $drink->category_id = $row[4];
            $drink->garnish = strtolower(htmlentities($row[5]));
            $drink->save();
        }
        fclose($fh); 
    }
}
