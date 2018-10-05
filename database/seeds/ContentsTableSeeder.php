<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');

        foreach (range(1, 100) as $loop) {
            DB::table('contents')->insert([
                'title'      => $faker->text,
                'excerpt'    => str_slug($faker->text),
                'content'    => $faker->paragraph,
                'user_id'    => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

    }
}
