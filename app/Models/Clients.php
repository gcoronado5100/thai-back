<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address_street',
        'address_ext',
        'address_int',
        'address_col',
        'address_county',
        'address_city',
        'address_state',
        'address_zip',
        'registered_by',
        'updated_by',
        'pdv'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    // relation one to many with users
    public function user()
    {
        return $this->belongsTo(User::class, 'registered_by', 'id');
    }
}
