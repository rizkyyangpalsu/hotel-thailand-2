<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "id",
        "name",
        "description",
        "bed",
        "quantity",
        "price",
        "created_at",
        "updated_at",
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class, 'room_id', 'id');
    }

    public function facilities()
    {
        return $this->hasMany(RoomFacility::class, 'room_id', 'id');
    }

    public function books()
    {
        return $this->hasMany(RoomBook::class, 'room_id', 'id');
    }
}
