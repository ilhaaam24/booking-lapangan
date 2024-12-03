<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

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
        ];
        
        foreach($permission as $perm){
            Permission::create()
        }
    }
}
