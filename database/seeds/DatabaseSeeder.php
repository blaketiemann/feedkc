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
        factory(App\User::class)->create(['account' => 'donor', 'email' => 'donor@secret.com']);
        factory(App\User::class)->create(['account' => 'requester', 'email' => 'requester@secret.com']);

        App\User::where('account', 'donor')->each(function($donor) {
            factory(App\Food::class, 24)->create([
                'donor_id' => $donor->id,
                'status' => 'listed'
            ]);
        });
    }
}
