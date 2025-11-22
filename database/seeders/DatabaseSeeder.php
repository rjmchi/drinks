<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Drink;
use App\Models\Ingredient;
use App\Models\Method;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::truncate();
        Drink::truncate();
        Ingredient::truncate();
        Method::truncate();
        Category::truncate();


        User::factory()->create([
            'name' => 'Robert',
            'email' => 'robert@test.com',
            'password'=>'kether1330',
        ]);

        $this->call([
            CategorySeeder::class,
            MethodSeeder::class,
            DrinkSeeder::class,
            IngredientSeeder::class,
        ]);

    }
}
