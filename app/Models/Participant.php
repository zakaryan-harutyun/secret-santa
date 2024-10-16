<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'santa_id', 'ward_id'];

    public function santa()
    {
        return $this->belongsTo(Participant::class, 'santa_id');
    }

    public function ward()
    {
        return $this->belongsTo(Participant::class, 'ward_id');
    }
}
