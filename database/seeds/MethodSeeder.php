<?php

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
            $row = array_map( "convert", $data);
            $meth = new \App\Method;
            $meth->id = $row[0];
            $meth->method = strtolower(htmlentities($row[1]));
            $meth->save();
        }
        fclose($fh); 
    }
}
