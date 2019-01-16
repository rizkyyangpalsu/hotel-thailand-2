<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomBook extends Model
{
    protected $fillable = [
        "user_id",
        "room_id",
        "name",
        "email",
        "country",
        "phone",
        "number_of_rooms",
        "adult",
        "child",
        "check_in",
        "check_out",
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'book_id', 'id');
    }
}
