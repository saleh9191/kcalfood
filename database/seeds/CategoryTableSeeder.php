<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new App\Category();
        $category->name = 'معجنات';
        $category->save();

        $category = new App\Category();
        $category->name = 'مشروبات';
        $category->save();

        $category = new App\Category();
        $category->name = 'لحوم و دواجن';
        $category->save();

        $category = new App\Category();
        $category->name = 'فواكه';
        $category->save();

        $category = new App\Category();
        $category->name = 'خضروات';
        $category->save();

        $category = new App\Category();
        $category->name = 'سناك';
        $category->save();

        $category = new App\Category();
        $category->name = 'حمية';
        $category->save();
    }
}
