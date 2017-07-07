<?php

use Illuminate\Database\Seeder;

class PictureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $picture = new App\Picture();
        $picture->image = 'https://i.ytimg.com/vi/3zESBqeA_8U/maxresdefault.jpg';
        $picture->save();
    }
}
