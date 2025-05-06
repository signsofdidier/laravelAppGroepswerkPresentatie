<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    public function run(): void
    {
        Plan::create([
            'name' => 'Basic',
            'slug' => 'basic',
            'stripe_price_id' => 'price_1R8eddQsPaPro7IJW2NSym0L',
            'price' => 5.00,
            'features' => 'Access to basic features',
        ]);

        Plan::create([
            'name' => 'Pro',
            'slug' => 'pro',
            'stripe_price_id' => 'price_1R8edtQsPaPro7IJASArUzct',
            'price' => 10.00,
            'features' => 'Everything in Basic + more',

        ]);

        Plan::create([
            'name' => 'Premium',
            'slug' => 'premium',
            'stripe_price_id' => 'price_1R8ee5QsPaPro7IJL2jD3Yho',
            'price' => 20.00,
            'features' => 'All features unlocked',
        ]);
    }
}

