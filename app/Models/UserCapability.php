<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCapability extends Model
{
    use HasFactory;
    protected $table = 'user_capabilities';
    protected $primaryKey = 'id';
    public $timestamps = true;

    // Relation One to Many with User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relation One to Many with UserType
    public function userType()
    {
        return $this->belongsTo(UserType::class, 'user_type_id');
    }

    // Relation one to many with PDVs
    public function pdv()
    {
        return $this->hasMany(Pdv::class, 'pdv_id');
    }
}
