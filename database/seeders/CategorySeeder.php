<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filename = database_path('category.txt');
        $fh = fopen($filename,"r");
        while($data = fgetcsv($fh)){
            $row = array_map(array($this,'convert'), $data);
            $cat = new \App\Models\Category;
            $cat->id = $row[0];
            $cat->name = $row[1];
            $cat->slug = Str::slug($row[1]);
            $cat->save();
        }
        fclose($fh);
    }
    private function convert( $str ) {
        return iconv( "Windows-1252", "UTF-8", $str );
    }
}
