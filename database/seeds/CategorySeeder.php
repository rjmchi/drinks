<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filename = database_path('category.txt');
        $fh = fopen($filename,"r");  
        while($data = fgetcsv($fh)){
            $row = array_map( "convert", $data);
            $cat = new \App\Category;
            $cat->id = $row[0];
            $cat->name = $row[1];
            $cat->save();
        }
        fclose($fh); 
    }
}
