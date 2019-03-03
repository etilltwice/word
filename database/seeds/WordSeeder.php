<?php

use Illuminate\Database\Seeder;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\User::class, 10)->create();
        // factory(App\Eloquents\Character::class, 10)->create();
        // factory(App\Eloquents\Skill::class, 10)->create();
        // factory(App\Eloquents\Image::class, 10)->create();
        // factory(App\Eloquents\Board::class, 10)->create();
        // factory(App\Eloquents\Response::class, 10)->create();
        factory(App\Eloquents\News::class, 10)->create();
    }
}
