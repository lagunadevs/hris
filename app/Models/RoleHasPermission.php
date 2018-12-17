<?php

namespace MarkVilludo\Permission\Models;

use Illuminate\Database\Eloquent\Model;
use MarkVilludo\Permission\Models\Permission;

class RoleHasPermission extends Model
{
    //

    public function roleAccess()
    {
    	return $this->belongsTo(Permission::class,'permission_id', 'id');
    }
	public function getPermissionNameAttribute()
	{
	    return "{$this->roleAccess->name}";
	}
}
