<?php

use App\Models\Company;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Tenant::setTenant(Company::find(1));
        factory(\App\Models\User::class, 1)
            ->create([
                'email' => 'user1@user.com',
            ]);

        \Tenant::setTenant(Company::find(2));
        factory(\App\Models\User::class, 1)
            ->create([
                'email' => 'user2@user.com',
            ]);
    }
}
