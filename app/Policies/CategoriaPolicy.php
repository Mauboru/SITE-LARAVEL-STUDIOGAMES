<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Categoria;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Facades\Permissions;

class CategoriaPolicy {
    use HandlesAuthorization;
    
    public function index(User $user) {
        return Permissions::isAuthorized('categoria.index');
    }

    public function create(User $user) {
        return Permissions::isAuthorized('categoria.create');
    }

    public function update(User $user, Jogo $jogo) {
        return Permissions::isAuthorized('categoria.update');
    }

    public function delete(User $user, Categoria $categoria) {
        return Permissions::isAuthorized('categoria.delete');
    }

    public function view(User $user, Categoria $categoria) {
        return Permissions::isAuthorized('categoria.view');
    }
}