<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permission =[
            'manage kategori',
            'manage lapangan',
            'manage transaksi',
            'manage keanggotaan',
            'manage user',
            'checkout lapangan',
            'view lapangan bookings'
        ];
        
        foreach($permission as $perm){
            Permission::firstOrCreate([
                'name' => $perm
            ]);
        }

        $customerRole = Role::firstOrCreate([
            'name' => 'pengguna'
        ]);


        $customerPermissions = [
            'checkout lapangan',
            'view lapangan bookings'
        ];

        $customerRole->syncPermissions($customerPermissions);

        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin'
        ]);

        $user = User::create([
            'name' => 'Super_Admin',
            'email' => 'admin@gmail.com',
            'avatar' =>'image/dummyavatar.png',
            'password' => bcrypt('admin123'),
            
        ]);

        $user->assignRole($superAdminRole);
    }
}
