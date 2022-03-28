<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            $row = array_map(array($this,'convert'), $data);
            $cat = new \App\Models\Category;
            $cat->id = $row[0];
            $cat->name = $row[1];
            $cat->save();
        }
        fclose($fh);
    }
    private function convert( $str ) {
        return iconv( "Windows-1252", "UTF-8", $str );
    }
}
