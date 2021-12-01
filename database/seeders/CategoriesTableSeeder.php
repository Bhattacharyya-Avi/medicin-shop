<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Liquid',
            'description'=>'A liquid may also be called a ‘mixture’, ‘solution’ or ‘syrup’.',
        ]);

        Category::create([
            'name'=>'Tablet',
            'description'=>'This category contains all type of tablet.',
        ]);

        Category::create([
            'name'=>'Capsules',
            'description'=>'The active part of the medicine is contained inside a plastic shell that dissolves slowly in the stomach.',
        ]);

        Category::create([
            'name'=>'Topical medicines',
            'description'=>'These are creams, lotions or ointments applied directly onto the skin.',
        ]);

        Category::create([
            'name'=>'Suppositories',
            'description'=>'The active part of the medicine is combined with another substance and pressed into a ‘bullet shape’ so it can be inserted into the bottom.',
        ]);

        Category::create([
            'name'=>'Drops',
            'description'=>'These are often used where the active part of the medicine works best if it reaches the affected area directly. They tend to be used for eye, ear or nose.',
        ]);

        Category::create([
            'name'=>'Inhalers',
            'description'=>'The active part of the medicine is released under pressure directly into the lungs.',
        ]);

        Category::create([
            'name'=>'Injections',
            'description'=>'This category contains all type of injections. ',
        ]);

        Category::create([
            'name'=>'Inhalers',
            'description'=>'The active part of the medicine is released under pressure directly into the lungs.',
        ]);

        Category::create([
            'name'=>'Inhalers',
            'description'=>'The active part of the medicine is released under pressure directly into the lungs.',
        ]);
    }
}
