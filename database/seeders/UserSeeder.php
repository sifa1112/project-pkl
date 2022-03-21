<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Administrator";
        $adminRole->save();

        $karyawanRole = new Role();
        $karyawanRole->name = "karyawan";
        $karyawanRole->display_name = "Karyawan";
        $karyawanRole->save();

        //membuat sample user
        $admin = new User();
        $admin->name = 'Sifa Afna';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('12345678');
        $admin->save();
        $admin->attachRole($adminRole);

        //membuat sample user
        // $karyawan = new User();
        // $karyawan->name = 'Karyawan User';
        // $karyawan->email = 'karyawan@gmail.com';
        // $karyawan->password = bcrypt('rahasia');
        // $karyawan->save();
        // $karyawan->attachRole($karyawanRole);
    }
}
