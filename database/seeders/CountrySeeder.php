<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
public function run()
{
Country::create
([
'name'=>'Pakistan',
'code'=>'PAK'
]);
Country::create
([
'name'=>'UK',
'code'=>'UAK'
]);
Country::create
([
'name'=>'Turkey',
'code'=>'TKR'
]);
Country::create
([
'name'=>'India',
'code'=>'IND'
]);
Country::create
([
'name'=>'Iran',
'code'=>'IRA'
]);
}
}
