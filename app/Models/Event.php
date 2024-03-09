<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Event extends Model
{
    use HasFactory;
    use HasRoles;
    protected $fillable = [
        'title',
        'description',
        'image',
        'user_id',
        'category_id',
        'quantity',
        'date',
        'location',
        'validation',
        'status',         
    ];
   
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

      
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
