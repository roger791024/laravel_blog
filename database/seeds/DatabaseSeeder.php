<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        Model::unguard();

        $this->call('PostsTableSeeder');
        $this->call('CommentsTableSeeder');
        $this->call('ContactsTableSeeder');
    }
}
