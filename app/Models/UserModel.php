<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable implements JWTSubject
{
    // use HasFactory;

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    protected $table = 'm_user';    //Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id'; //Mendefinisikan primary key dari tabel yang digunakan

    protected $fillable = ['level_id', 'username','nama', 'password'];

    public function level(): BelongsTo{
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}



    //jobsheet 9
    // use HasFactory;

    // protected $table = 'm_user';
    // protected $primaryKey = 'user_id';

    // protected $fillable = ['level_id', 'username', 'nama', 'password'];

    // public function getAuthIdentifierName()
    // {
    //     return 'user_id'; // Sesuaikan dengan nama kolom primary key
    // }

    // public function getAuthIdentifier()
    // {
    //     return $this->{$this->getAuthIdentifierName()};
    // }

    // public function getAuthPassword()
    // {
    //     return $this->password;
    // }

    // public function getRememberToken()
    // {
    //     return null;
    // }

    // public function setRememberToken($value)
    // {
    //     // Do nothing
    // }

    // public function getRememberTokenName()
    // {
    //     return null;
    // }
// }