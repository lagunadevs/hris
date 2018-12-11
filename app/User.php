<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use MarkVilludo\Permission\Traits\HasRoles;
use MarkVilludo\Permission\Models\Permission;
use MarkVilludo\Permission\Models\RoleHasPermission;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $casts = [
        'expiration_date' => 'datetime',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'is_expire_access', 'expiration_date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function scopeFilterByName($query, $key)
    {
        return $query->where('first_name', 'like', '%' . $key . '%')
            ->orWhere('last_name', 'like', '%' . $key . '%')
            ->orWhere('email', 'like', '%' . $key . '%');
    }

    //get by roles
    public function scopeFilterByRole($query, $role)
    {
        if ($role) {
            return  $query->withAndWhereHas('roles', function ($query) use ($role) {
                    $query->where('id', $role);
            });
        }
    }

    //for withandwherehas
    public function scopeWithAndWhereHas($query, $relation, $constraint)
    {
        return $query->whereHas($relation, $constraint)->with([$relation => $constraint]);
    }
    
    public static function checkAccess($permissionName, $moduleName)
    {
        // return $permissionName.'-'.$moduleName;
        $roleIds = auth()->user()->roles->pluck('id');
        //get permission id base on permission and module name
        $permissionData = Permission::where('name', $permissionName)
                                        ->where('module', $moduleName)
                                        ->first();
        if ($permissionData) {
            $checkIfHasPermission = RoleHasPermission::whereIn('role_id', $roleIds)
                                        ->where('permission_id', $permissionData->id)
                                        ->first();

            if ($checkIfHasPermission) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

}
