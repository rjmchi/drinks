<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            // $row = array_map( $this->convert, $data);
            $row = array_map(array($this,'convert'), $data);
            $drink = new \App\Models\Drink;
            $drink->id = $row[0];
            $drink->name = $this->convert($row[1]);
            $drink->glass = $row[2];
            $drink->method_id = $row[3];
            $drink->category_id = $row[4];
            $drink->garnish = $row[5];
            $drink->save();
        }
        fclose($fh);
    }
    private function convert( $str ) {
        return iconv( "Windows-1252", "UTF-8", $str );
    }
}


