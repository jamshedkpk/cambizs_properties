<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
public function run()
{
State::create
([
'name'=>'Islamabad',
'country_id'=>1
]);
State::create
([
'name'=>'New York',
'country_id'=>2
]);
State::create
([
'name'=>'Istanbul',
'country_id'=>3
]);
State::create
([
'name'=>'Delhi',
'country_id'=>4
]);
State::create
([
'name'=>'Tehran',
'country_id'=>5
]);
}
}
