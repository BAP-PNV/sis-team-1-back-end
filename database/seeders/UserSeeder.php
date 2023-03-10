<?php
 
 namespace Database\Seeders;

 use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Str;
 
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}