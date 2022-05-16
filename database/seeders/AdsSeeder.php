<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Ads;

class AdsSeeder extends Seeder
{
public function run()
{
Ads::create
([
'name'=>'Apartment',
'start_date'=>'02-02-2022',
'end_date'=>'10-02-2022',
'status'=>'pending',
'user_id'=>2,
'catagory_id'=>1,
]);
}
}
