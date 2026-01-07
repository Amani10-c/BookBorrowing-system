<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';
    public function userNotifications()
    {
        return $this->belongsToMany(UserNotification::class, 'user_notifications', 'user_id', 'notification_id');
    }
}
