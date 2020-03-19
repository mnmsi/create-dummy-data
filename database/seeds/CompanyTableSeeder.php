<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Employee::class, 1000)->create()->each(function() {
		    (factory(App\Employee::class)->make());
		});
    }
}

