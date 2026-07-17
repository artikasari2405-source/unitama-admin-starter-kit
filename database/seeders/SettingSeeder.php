<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
                'app_name' => 'Admin Laravel',
                'copyright' => 'Admin Laravel || 2026',
                'login_title' => 'Admin Laravel',
                'description' => 'admin, dashboard, laravel, niceadmin, bootstrap',
                'keywords' => 'admin, dashboard, laravel, niceadmin, bootstrap',
                
        ]);
    }
}
