<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class City extends Model
{
    use HasFactory;
    protected $fillable=['name','country_id'];

// Each city is associated to a specific country
public function country()
{
    return $this->belongsTo(Country::class);
}
}
