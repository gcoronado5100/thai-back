<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    use HasFactory;
    protected $table = 'user_settings';
    protected $primaryKey = 'id';
    public $timestamps = true;

    // Relation One to Many with User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
