<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $th = factory(\App\Thread::class, 99999)->create();
        $th->each(function($th) {
            factory(\App\Reply::class, rand(50, 500))->create(['thread_id' => $th->id]);
        });
    }
}
