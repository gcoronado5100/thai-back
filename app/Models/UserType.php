<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;
    protected $table = 'user_types';
    protected $primaryKey = 'id';
    public $timestamps = true;

    // Relation One to Many with User Capability
    public function userCapability()
    {
        return $this->hasMany(UserCapability::class, 'user_type_id');
    }
}
