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
        $this->call(RoleTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(PositionTableSeeder::class);
        $this->call(UserDetailsTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(ModuleTableSeeder::class);
        $this->call(ProgramsTableSeeder::class);
    }
}
