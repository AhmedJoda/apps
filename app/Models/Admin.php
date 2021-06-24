<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends User
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "users";
    public static function query()
    {
        return parent::query()->where('is_admin',1);
    }
    public static function all($columns = ['*'])
    {
        return parent::all($columns)->where('is_admin',1);
    }
    public function permissions(){
        return $this->hasMany(AdminPermission::class,'user_id','id');
    }
}
