<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Laravel\Scout\Searchable;

class Person extends Model
{
    use HasFactory;
    use Searchable;

    public function getAlldataAttribute()
    {
        return $this->name . '(' . $this->age . ')'
        . '[' . $this->mail . ']';
    }
}
