<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\String\s;

class House extends Model
{
    use HasFactory;

    protected $table = 'scraped_re';
    protected $fillable = [
      ''
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function city_district()
    {
        return $this->belongsTo(CityDistrict::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function scopeSearch($query, $data)
    {
        $search = json_decode($data);

        $query->whereBetween('price', [$search->price_min, $search->price_max]);
        $query->whereBetween('area_size', [$search->size_min, $search->size_max]);
        $query->whereBetween('room_count', [$search->room_min, $search->room_max]);
        $query->whereBetween('half_room_count', [$search->half_room_min, $search->half_room_max]);

        $query->Where('status_id', 'LIKE', '%12%');

        if(isset($search->cities_) && null !== $search->cities_ ) {
            foreach ($search->cities_ as $key => $value) {
                $query->Where('city_id', 'LIKE', '%'.$value.'%');
            }
        }
    }

}
