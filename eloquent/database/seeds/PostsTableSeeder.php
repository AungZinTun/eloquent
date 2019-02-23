<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Prophecy\Comparator\Factory;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10000; $i++) { 
            DB::table('posts')->insert([
                'user_id' => collect([1,2,3]),
                'title' => Str::random(10),
                'body' => Str::random(10),

            
            ]);
        }
    }
}
