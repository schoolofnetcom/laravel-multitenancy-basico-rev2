<?php

use App\Models\Company;
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
        \Tenant::setTenant(Company::find(1));
        factory(\App\Models\Category::class, 50)->create();

        \Tenant::setTenant(Company::find(2));
        factory(\App\Models\Category::class, 50)->create();
    }
}
