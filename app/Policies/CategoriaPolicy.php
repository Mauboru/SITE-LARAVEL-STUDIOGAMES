<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Categoria;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Facades\Permissions;

class CategoriaPolicy {
    use HandlesAuthorization;

    public function __construct() {
    }
    
    public function hasFullPermission() {
        return Permissions::isAuthorized('categoria');
    }
}