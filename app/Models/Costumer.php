<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Costumer extends Authenticatable
{
    use HasFactory;

    protected $table = 'costumers';

    protected $fillable = [
        'id', 'name', 'email', 'password', 'active'
    ];

    public function setData($request)
    {
      $this->name = $request['name'];
      $this->email = $request['email'];
      $this->password = $request['password'];
      $this->active = 1;
    }

    public function scopeCheck($query, $data)
    {
        $query->where('email', 'LIKE', '%' . $data . '%');
    }

    public function setSearch($data)
    {
        // Ár
        if( !isset($data['price_min']) ){
            $data['price_min'] = 0;
        }
        if( !isset($data['price_max']) ){
            $data['price_max'] = House::max('price');
        }

        // Terület
        if(( !isset($data['size_min']) ) ){
            $data['size_min'] = 0;
        }
        if( !isset($data['size_max']) ){
            $data['size_max'] = House::max('area_size');
        }

        // Szobák
        if( !isset($data['room_min']) ){
            $data['room_min'] = 0;
        }
        if( !isset($data['room_max']) ){
            $data['room_max'] = House::max('room_count');
        }

        // Félszobák
        if( !isset($data['half_room_min']) ){
            $data['half_room_min'] = 0;
        }
        if( !isset($data['half_room_max']) ){
            $data['half_room_max'] = House::max('half_room_count');
        }

        return json_encode($data);
    }


}
