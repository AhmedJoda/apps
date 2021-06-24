<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPermission extends Model
{
    use HasFactory;
    protected $guarded = [];
    public static function can($code,$admin = null){
        $admin = $admin ?? authedAdmin();
        if ($admin->super_admin)
            return true;
        return $admin->permissions->pluck('code')->contains($code);
    }
    public static function add($code,$admin = null){
        $admin = $admin ?? authedAdmin();
        return $admin->permissions()->create(['code'=>$code]);
    }
    public static function remove($code,$admin = null){
        $admin = $admin ?? authedAdmin();
        return $admin->permissions()->where('code',$code)->delete();
    }
    public static function toggle($code,$admin = null){
        $admin = $admin ?? authedAdmin();
        if (self::can($code,$admin)){
            self::remove($code,$admin);
        }else{
            self::add($code,$admin);
        }
        return self::can($code,$admin);
    }
}
