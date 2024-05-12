<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PenjualanModel extends Model
{
    use HasFactory;

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    protected $table = 't_penjualan'; 
    protected $primaryKey = 'penjualan_id'; 

    protected $fillable = ['user_id','pembeli','penjualan_kode','penjualan_tanggal', 'image'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'user_id');
    }

    protected function image():Attribute{
        return new Attribute(
            get: fn ($image) => url('/storage/posts/'. $image)
        );
    }
}
