<?php

use App\Category;
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
//        factory(\App\Category::class, 6)->create();  // For factory

        $category_names = array('Žurke', 'Festivali', 'Svirke', 'Priroda', 'Književnost', 'Kultura', 'Sport');

        for ($i = 0; $i < count($category_names); $i++){
            $category = new Category();
            var_dump($category_names[$i]);
            $category->name = $category_names[$i];
            $category->save();
        }
    }
}