<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
public function run()
{
City::create
([
'name'=>'ABC',
'country_id'=>1
]);
City::create
([
'name'=>'DEF',
'country_id'=>2
]);
City::create
([
'name'=>'IJK',
'country_id'=>3
]);
City::create
([
'name'=>'LMN',
'country_id'=>4
]);
City::create
([
'name'=>'OPQ',
'country_id'=>5
]);
}
}
