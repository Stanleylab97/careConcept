<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // the Eloquent part and disabling and enabling of foreign keys is only intended for development
        Eloquent::unguard();
        
        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EntrepriseSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
