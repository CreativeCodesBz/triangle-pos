<?php

namespace Modules\People\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\People\Entities\Customer;
use Modules\People\Entities\Supplier;

class PeopleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Customer::create([
            'customer_name' => 'Cash Customer',
            'customer_email' => 'customer@customer.com',
            'customer_phone' => '999-999-9999',
            'city' => 'Customer',
            'country' => 'Customer',
            'address' => 'Customer'
        ]);

        Customer::factory()->count(15)->create();
        Supplier::factory()->count(6)->create();
    }
}
