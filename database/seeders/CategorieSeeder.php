<?php

namespace Database\Seeders;

use App\Models\Product_categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Product_categorie();
        $category->name = "bonen";
        $category->is_employee_only = 0;
        $category->save();

        $category = new Product_categorie();
        $category->name = "apparaten";
        $category->is_employee_only = 0;
        $category->save();

        $category = new Product_categorie();
        $category->name = "materialen";
        $category->is_employee_only = 1;
        $category->save();
    }
}
