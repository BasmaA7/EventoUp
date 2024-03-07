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
        'status_id',
        'date',
        'location',
        'validation',
        
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            // Définir la valeur par défaut de status_id à 0 ('archiver') lors de la création d'un nouvel événement
            $event->status_id = 1;
        });
    }
    public function categories(){
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
