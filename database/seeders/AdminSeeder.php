<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Faker\Factory as fake;
use Illuminate\Support\Str;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = fake::create('id_ID');
        $data = [
            'uuid' => $faker->uuid,
            'username' => 'azuhri',
            'email' => 'aziszuhrip354@gmail.com',
            'password' => bcrypt('admin'),

        ];
        Admin::insert($data);
    }
}
