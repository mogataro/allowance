<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @author negishi
     * @since  2019-03-13
     * 
     * @return void
     */
    public function run()
    {
        $this->call([
            UserAuthoritiesTableSeeder::class,      // ユーザー権限テーブル用
            UsersTableSeeder::class                 // ユーザーテーブル用
        ]);
    }
}
