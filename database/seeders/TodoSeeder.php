<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Todo::insert([
            [
                'user_id' => 1,
                'title' => 'Todo 1',
                'body' => 'Body 1',
            ],
            [
                'user_id' => 3,
                'title' => 'Todo 2',
                'body' => 'Body 2',
            ],
        ]);
    }
}
