<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
public function run()
{
Role::create(['name'=>'admin']);
Role::create(['name'=>'landlord']);
Role::create(['name'=>'agent']);
Role::create(['name'=>'client']);
}
}
