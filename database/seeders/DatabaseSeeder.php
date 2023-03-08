<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'user']);
        // 1.  Admin
        $user = new User();
        $user->name = 'Admin';
        $user->password = Hash::make('000000');
        $user->email = 'admin@litcode-it.com';
        $user->assignRole('admin');
        $user->save();
        // 2. User
        $user = new User();
        $user->name = 'User';
        $user->password = Hash::make('000000');
        $user->email = 'user@litcode-it.com';
        $user->assignRole('user');
        $user->save();
        //seed 30 users
        \App\Models\User::factory()->count(30)->create();
        //assign role to users where id > 2
        $users = User::where('id', '>', 2)->get();
        foreach ($users as $user) {
            $user->assignRole('user');
        }
        //seed restaurants
        $this->call(RestaurantSeeder::class);
        //seed categories
        $this->call(CategorySeeder::class);
        //seed products
        $this->call(ProductSeeder::class);






    }
}
