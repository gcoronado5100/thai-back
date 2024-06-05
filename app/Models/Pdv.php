<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdv extends Model
{
    use HasFactory;
    protected $table = 'pdvs';
    protected $primaryKey = 'id';
    public $timestamps = true;

    // Relation One to Many with User Capability
    public function userCapability()
    {
        return $this->belongsTo(UserCapability::class, 'pdv_id');
    }
}
