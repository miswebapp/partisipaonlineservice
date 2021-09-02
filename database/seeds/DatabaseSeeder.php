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
        $this->call(ProjectTableSeeder::class);
        $this->call(MonitoringToolsTableSeeder::class);
        $this->call(MonitoringRatingTableSeeder::class);
        $this->call(ActivityTableSeeder::class);
        $this->call(ActivityCategoryTableSeeder::class);
        $this->call(ActivityLocationTableSeeder::class);
        $this->call(InstitutionTableSeeder::class);
        $this->call(CounterpartsPositionTableSeeder::class);
        $this->call(CounterpartsTableSeeder::class);
        $this->call(MunicipalTableSeeder::class);
        $this->call(WeaknessCategoriesTableSeeder::class);
        $this->call(WeaknessesTableSeeder::class);        
        $this->call(PostoTableSeeder::class);    
        $this->call(SucoTableSeeder::class);     
        $this->call(ProjectActivityTableSeeder::class);  
        $this->call(FSTTeamTableSeeder::class);  
        $this->call(ModuleTableSeeder::class);  
    }
}
