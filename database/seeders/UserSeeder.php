<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $roleadmin = new Role();
        $roleadmin->name = "Admin";    
        $roleadmin->save();

        $rolepenulis = new Role();
        $rolepenulis->name = "penulis";
        $rolepenulis->save();


        $admin = new \App\Models\User();
        $admin->name = "Admin";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt("rahasia");
        $admin->role_id =1;
        $admin->save();
     

        $admin = new \App\Models\User();
        $admin->name = "penulis";
        $admin->email = "penulis@gmail.com";
        $admin->password = bcrypt("penulis");
        $admin->save();
       
    }
}
