<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(MethodSeeder::class);
        $this->call(DrinkSeeder::class);
        $this->call(IngredientSeeder::class);
    }
}
function convert( $str ) {
    return iconv( "Windows-1252", "UTF-8", $str );
}