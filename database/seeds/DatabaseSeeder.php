<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create(['account' => 'donor', 'email' => 'donor@gmail.com']);
        factory(App\User::class)->create(['account' => 'requester', 'email' => 'requester@gmail.com']);


        factory(App\User::class, 50)->create();

        App\User::where('account', 'donor')->each(function($donor) {
            factory(App\Food::class, 15)->create(['donor_id' => $donor->id]);
        });
    }
}
