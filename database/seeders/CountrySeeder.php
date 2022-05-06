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
'name'=>'Africe',
'code'=>'AFR'
]);
Country::create
([
'name'=>'India',
'code'=>'IND'
]);
Country::create
([
'name'=>'Japan',
'code'=>'JPY'
]);
Country::create
([
'name'=>'Turkey',
'code'=>'TUR'
]);
}
}
