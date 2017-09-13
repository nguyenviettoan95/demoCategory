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
        $this->call('user');
    }

}

class user extends Seeder{
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'123','email'=>'123@gmail.com','password'=>bcrypt('123')]           
            ]);
    }
}