<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'scraped_re_status';

    public function houses()
    {
        return $this->hasMany(House::all);
    }
}
