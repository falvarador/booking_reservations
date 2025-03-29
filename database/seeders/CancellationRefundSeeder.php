<?php

namespace Database\Seeders;

use App\Models\CancellationRefund;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CancellationRefundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CancellationRefund::factory(50)->create();
    }
}
