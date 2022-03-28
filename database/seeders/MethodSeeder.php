<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filename = database_path('method.txt');
        $fh = fopen($filename,"r");
        while($data = fgetcsv($fh)){
            $row = array_map(array($this,'convert'), $data);
            $meth = new \App\Models\Method;
            $meth->id = $row[0];
            $meth->method = $row[1];
            $meth->save();
        }
        fclose($fh);
    }
    private function convert( $str ) {
        return iconv( "Windows-1252", "UTF-8", $str );
    }
}
