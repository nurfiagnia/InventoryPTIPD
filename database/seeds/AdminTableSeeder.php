<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Admin::create([
        	'nama' => 'Nida',
        	'jeniskelamin' => 'Perempuan',
        	'username' => 'nida',
        	'password' => bcrypt('nida1234')
        ]);
    }
}
