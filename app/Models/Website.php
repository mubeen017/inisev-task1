<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;


    //    protected $guarded = ['id']; // if not $fillable
    protected $fillable = ['domain', 'tile', 'description', 'user_id'];
    protected $hidden = ['updated_at'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
