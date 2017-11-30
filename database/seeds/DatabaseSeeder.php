<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 20)->create();
        factory(App\Location::class, 5)->create();
        factory(App\Meetup::class, 10)->create();
        \DB::table('meetup_user')->insert([
            [
                'meetup_id' => random_int(1,10),
                'user_id' => random_int(1,20)
            ],
            [
                'meetup_id' => random_int(1,10),
                'user_id' => random_int(1,20)
            ],
            [
                'meetup_id' => random_int(1,10),
                'user_id' => random_int(1,20)
            ],
            [
                'meetup_id' => random_int(1,10),
                'user_id' => random_int(1,20)
            ],
            [
                'meetup_id' => random_int(1,10),
                'user_id' => random_int(1,20)
            ],
            [
                'meetup_id' => random_int(1,10),
                'user_id' => random_int(1,20)
            ]
        ]);
    }
}
