<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'website_id'];

    public function website()
    {
        return $this->belongsTo(Website::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function validateSubscription($websiteId, $userId)
    {
        return static::query()
            ->where('website_id', $websiteId)
            ->where('user_id', $userId)
            ->exists();
    }

}
