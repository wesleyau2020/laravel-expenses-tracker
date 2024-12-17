<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateExpensesUserIdSeeder extends Seeder
{
    public function run()
    {
        // Update all records in the expenses table
        DB::table('expenses')->update(['user_id' => 1]);
    }
}
