<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class Category extends Model
{
    use HasFactory;
    use HasRoles;
    protected $fillable =[
        'title',
        'image',
    ];


    public function events(){
        return $this->hasMany(Event::class);

    }
}
