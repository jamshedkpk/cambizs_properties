<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\State;
use App\Models\City;

class Country extends Model
{
use HasFactory;
protected $fillable=['name','code'];

// Each country has many states
public function states()
{
return $this->hasMany(state::class);
}

// Each country has many cities
public function cities()
{
return $this->hasMany(city::class);
}
}

