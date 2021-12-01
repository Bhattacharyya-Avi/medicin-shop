<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name'=>'Renata Pharmaceuticals Limited',
        ]);

        Company::create([
            'name'=>'Incepta Pharmaceuticals Limited ',
        ]);

        Company::create([
            'name'=>'Beximco Pharmaceuticals Limited',
        ]);

        Company::create([
            'name'=>'Square Pharmaceuticals Limited ',
        ]);

        Company::create([
            'name'=>'Healthcare Pharmaceuticals Limited',
        ]);

        Company::create([
            'name'=>'Opsonin Pharma Limited',
        ]);

        Company::create([
            'name'=>'ACI Pharmaceuticals',
        ]);

        Company::create([
            'name'=>'Eskayef Pharmaceuticals Limited',
        ]);

        Company::create([
            'name'=>'Drug International Limited',
        ]);

        Company::create([
            'name'=>'ACME Laboratories Limited',
        ]);
    }
}
