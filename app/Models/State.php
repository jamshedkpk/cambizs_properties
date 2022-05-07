<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class State extends Model
{
    use HasFactory;
    protected $fillable=['name','country_id'];

// Each state is associated to a specific country
public function country()
{
    return $this->belongsTo(Country::class);
}
}
