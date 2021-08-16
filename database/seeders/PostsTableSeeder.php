<?php

namespace Database\Seeders;

use Facade\Ignition\Support\FakeComposer;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{



    protected function getData() : array
    {
        $faker = Factory::create();
        $data = [];
        for ($i = 0; $i<100; $i++){
            $data[] = [
            'post' => $faker->text(mt_rand(100, 300)),
            ];
        }
        return $data;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert($this->getData());
    }
}
