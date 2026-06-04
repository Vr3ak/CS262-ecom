<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'Vireak Heng',
            'email'    => 'vireak67@gmail.com',
            'password' => bcrypt('vireak168'),
            'role'     => 'admin'
        ]);

        $categories = ['Electronics', 'Agricultural', 'Drinks', 'Accessories', 'Clothing'];

        foreach ($categories as $category) {
            Category::create([
                'name'      => $category,
            ]);
        }
    }
}
