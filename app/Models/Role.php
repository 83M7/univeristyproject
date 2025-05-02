<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'role_id';

    public function permissions(){
        return $this->belongsToMany(permission::class, 'permissions_roles', 'role_role_id', 'permissions_permissions_id');
       }}
