<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Image extends Model
{
    protected $fillable = ['filename', 'path', 'delete_at', 'user_id', 'session_id'];

    protected $casts = [
        'delete_at' => 'datetime',
    ];

    public function setDeleteAtAttribute($value)
    {
        $this->attributes['delete_at'] = $value ? Carbon::parse($value) : null;
    }

    public function getDeleteAtAttribute($value)
    {
        return $value ? Carbon::parse($value) : null;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
