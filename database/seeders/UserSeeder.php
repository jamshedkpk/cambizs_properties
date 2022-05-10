<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
public function run()
{
User::create
([
'name'=>'admin',
'email'=>'admin@gmail.com',
'role_id'=>1,
'password'=>Hash::make('admin')
]);
User::create
([
'name'=>'user',
'email'=>'user@gmail.com',
'role_id'=>2,
'password'=>Hash::make('admin')
]);
}
}
