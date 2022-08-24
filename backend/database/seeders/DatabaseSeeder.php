<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $hash=Hash::make('12345678');
        DB::table('users')->insert([
            ['name' => "admin",'username'=>'admin','password'=>''.$hash.'','role'=>'admin'],

        ]);
        Setting::insert(['commission'=>1]);
    }
}
