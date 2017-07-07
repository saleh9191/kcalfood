<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(PictureTableSeeder::class);
        $this->call(ProductPictureSeeder::class);
    }
}
