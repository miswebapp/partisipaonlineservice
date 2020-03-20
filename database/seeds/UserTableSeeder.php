<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('user_role')->truncate();
        $admin = Role::where('name','Admin')->first();
        $administrator = User::create(['name'=>'Administrator', 'email'=>'it@pndssp.tl ','password'=>Hash::make('password')]);
        $administrator->roles()->attach($admin);
    }
}
