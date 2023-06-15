<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $guarded = [];

    // protected $fillable = [
    //     'company', 'title', 'website', 'tags', ''
    // ]

    public function user()
    {
        // return $this->belongsTo(User::class, 'author_id');
        return $this->belongsTo(User::class);
    }
}