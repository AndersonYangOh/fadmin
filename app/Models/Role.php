<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Orgs\Crud\CrudTrait;
use Spatie\Permission\Models\Role as OriginalRole;

class Role extends OriginalRole
{
    use CrudTrait;
    protected $fillable = ['name', 'updated_at', 'created_at'];
}
