<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactions = [
            ['userID' => 2, 'scheduleID' => 1, 'transactionDate' => '2021-12-01', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 2, 'transactionDate' => '2021-12-02', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 3, 'transactionDate' => '2021-12-02', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 4, 'transactionDate' => '2021-12-03', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 5, 'transactionDate' => '2021-12-03', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 6, 'transactionDate' => '2021-12-03', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 7, 'transactionDate' => '2021-12-04', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 8, 'transactionDate' => '2021-12-04', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 9, 'transactionDate' => '2021-12-05', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 10, 'transactionDate' => '2021-12-06', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 11, 'transactionDate' => '2021-12-06', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 12, 'transactionDate' => '2021-12-06', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 13, 'transactionDate' => '2021-12-07', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 14, 'transactionDate' => '2021-12-07', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 15, 'transactionDate' => '2021-12-07', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 16, 'transactionDate' => '2021-12-07', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 17, 'transactionDate' => '2021-12-08', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 18, 'transactionDate' => '2021-12-08', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 19, 'transactionDate' => '2021-12-10', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 20, 'transactionDate' => '2021-12-11', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 21, 'transactionDate' => '2021-12-12', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 22, 'transactionDate' => '2021-12-13', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 23, 'transactionDate' => '2021-12-14', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 24, 'transactionDate' => '2021-12-15', 'status' => 'undone'],
            ['userID' => 2, 'scheduleID' => 25, 'transactionDate' => '2021-12-15', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 1, 'transactionDate' => '2021-12-02', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 2, 'transactionDate' => '2021-12-02', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 3, 'transactionDate' => '2021-12-03', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 4, 'transactionDate' => '2021-12-04', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 5, 'transactionDate' => '2021-12-04', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 6, 'transactionDate' => '2021-12-05', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 7, 'transactionDate' => '2021-12-05', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 8, 'transactionDate' => '2021-12-05', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 9, 'transactionDate' => '2021-12-06', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 10, 'transactionDate' => '2021-12-07', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 16, 'transactionDate' => '2021-12-07', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 17, 'transactionDate' => '2021-12-08', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 18, 'transactionDate' => '2021-12-08', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 19, 'transactionDate' => '2021-12-10', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 20, 'transactionDate' => '2021-12-11', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 21, 'transactionDate' => '2021-12-12', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 22, 'transactionDate' => '2021-12-13', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 23, 'transactionDate' => '2021-12-14', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 24, 'transactionDate' => '2021-12-15', 'status' => 'undone'],
            ['userID' => 3, 'scheduleID' => 25, 'transactionDate' => '2021-12-15', 'status' => 'undone'],
            ['userID' => 4, 'scheduleID' => 1, 'transactionDate' => '2021-12-01', 'status' => 'undone'],
            ['userID' => 4, 'scheduleID' => 2, 'transactionDate' => '2021-12-02', 'status' => 'undone'],
            ['userID' => 4, 'scheduleID' => 3, 'transactionDate' => '2021-12-03', 'status' => 'undone'],
            ['userID' => 4, 'scheduleID' => 4, 'transactionDate' => '2021-12-04', 'status' => 'undone'],
            ['userID' => 4, 'scheduleID' => 5, 'transactionDate' => '2021-12-05', 'status' => 'undone'],
            ['userID' => 4, 'scheduleID' => 16, 'transactionDate' => '2021-12-06', 'status' => 'undone'],
            ['userID' => 4, 'scheduleID' => 17, 'transactionDate' => '2021-12-07', 'status' => 'undone'],
            ['userID' => 4, 'scheduleID' => 18, 'transactionDate' => '2021-12-08', 'status' => 'undone'],
            ['userID' => 4, 'scheduleID' => 19, 'transactionDate' => '2021-12-09', 'status' => 'undone'],
            ['userID' => 4, 'scheduleID' => 20, 'transactionDate' => '2021-12-11', 'status' => 'undone'],
            ['userID' => 4, 'scheduleID' => 21, 'transactionDate' => '2021-12-12', 'status' => 'undone'],
            ['userID' => 4, 'scheduleID' => 22, 'transactionDate' => '2021-12-13', 'status' => 'undone'],
            ['userID' => 4, 'scheduleID' => 23, 'transactionDate' => '2021-12-14', 'status' => 'undone'],
            ['userID' => 4, 'scheduleID' => 24, 'transactionDate' => '2021-12-15', 'status' => 'undone'],
            ['userID' => 4, 'scheduleID' => 25, 'transactionDate' => '2021-12-15', 'status' => 'undone'],
        ];

        DB::table('transactions')->insert($transactions);
    }
}
