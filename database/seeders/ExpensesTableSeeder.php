<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ExpensesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $expenses = [
            ['name' => 'Grocery shopping', 'category' => 'Food', 'amount' => 120.50, 'date' => Carbon::create(2024, 1, 5)], // January 5, 2024
            ['name' => 'Flight to New York', 'category' => 'Travel', 'amount' => 350.00, 'date' => Carbon::create(2024, 1, 10)], // January 10, 2024
            ['name' => 'Utility bill payment', 'category' => 'Utilities', 'amount' => 75.25, 'date' => Carbon::create(2024, 1, 15)], // January 15, 2024
            ['name' => 'Concert tickets', 'category' => 'Entertainment', 'amount' => 80.00, 'date' => Carbon::create(2024, 1, 20)], // January 20, 2024
            ['name' => 'Movie night snacks', 'category' => 'Miscellaneous', 'amount' => 25.75, 'date' => Carbon::create(2024, 1, 25)], // January 25, 2024
        
            ['name' => 'Dining out', 'category' => 'Food', 'amount' => 50.00, 'date' => Carbon::create(2024, 2, 3)], // February 3, 2024
            ['name' => 'Hotel stay', 'category' => 'Travel', 'amount' => 200.00, 'date' => Carbon::create(2024, 2, 7)], // February 7, 2024
            ['name' => 'Electricity bill', 'category' => 'Utilities', 'amount' => 100.00, 'date' => Carbon::create(2024, 2, 12)], // February 12, 2024
            ['name' => 'Movie tickets', 'category' => 'Entertainment', 'amount' => 35.00, 'date' => Carbon::create(2024, 2, 18)], // February 18, 2024
            ['name' => 'Coffee shop visit', 'category' => 'Miscellaneous', 'amount' => 12.50, 'date' => Carbon::create(2024, 2, 22)], // February 22, 2024
        ];

        // Insert expenses into the database
        foreach ($expenses as $expense) {
            DB::table('expenses')->insert([
                'name' => $expense['name'],
                'category' => $expense['category'],
                'amount' => $expense['amount'],
                'date' => $expense['date'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
