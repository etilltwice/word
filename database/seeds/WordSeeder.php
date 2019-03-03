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
        // factory(App\Eloquents\News::class, 10)->create();

        // ユーザーデータ作成
        factory(App\User::class, 10)->create()->each(function ($user) {

            // ユーザーデータ一つにつき、二つのキャラクターデータ作成
            $character = factory(App\Eloquents\Character::class, 2)
                ->create([
                    'user_id' => $user->id,
                ])
                ->each(function ($character) use ($user) {
                    // キャラクターごとに二つスキル作成
                    factory(App\Eloquents\Skill::class, 2)->create([
                        'character_id' => $character->id,
                    ]);

                    // それぞれのユーザーとキャラのボード作成
                    factory(App\Eloquents\Board::class, 1)->create([
                        'author_id' => $user->id,
                        'view_point' => true,
                    ])->each(function ($board) use ($user, $character) {
                        // それぞれのレスポンスを作成
                        factory(App\Eloquents\Response::class, 1)->create([
                            'speaker_id' => $user->id,
                            'board_id' => $board->id,
                            'view_point' => true,
                        ]);
                        factory(App\Eloquents\Response::class, 1)->create([
                            'speaker_id' => $character->id,
                            'board_id' => $board->id,
                            'view_point' => false,
                        ]);
                    });
                })->first();

            // ユーザーデータ一つにつき2つイラスト作成
            factory(App\Eloquents\Image::class, 2)->create([
                'user_id' => $user->id,
            ]);

            // ユーザーデータ一つにつき2つニュース作成
            factory(App\Eloquents\News::class, 2)->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
