<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = "alfian";
        $admin->email = "alfian@admin.com";
        $admin->password = bcrypt('admin123');
        $admin->save();

        $penulis = new User();
        $penulis->name = "alfianFR";
        $penulis->email = "alfian@penulis.com";
        $penulis->password = bcrypt('penulis123');
        $penulis->save();

        $role1 = new Role();
        $role1->name = "admin";
        $role1->display_name = "admin";
        $role1->description = "-";
        $role1->save();

        $role2 = new Role();
        $role2->name = "penulis";
        $role2->display_name = "penulis";
        $role2->description = "-";
        $role2->save();

        $admin->attachRole($role1);
        $penulis->attachRole($role2);
    }
}
