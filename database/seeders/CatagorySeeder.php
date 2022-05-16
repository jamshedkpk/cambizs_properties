<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Catagory;

class CatagorySeeder extends Seeder
{
public function run()
{
Catagory::create
([
'name'=>'Private Home',
'name'=>'Commercial Property'
]);
}
}
