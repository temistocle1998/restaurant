<?php

namespace App\Policies;

use App\Categorie;
use App\Facture;
use App\Plat;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return in_array($user->email, [
            'admin@admin.sn'
        ]);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Categorie  $categorie
     * @return mixed
     */
    public function view(User $user, Categorie $categorie, Plat $plat, Facture $facture)
    {
        return in_array($user->email, [
            'admin@admin.sn'
        ]);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Categorie  $categorie
     * @return mixed
     */
    public function update(User $user, Categorie $categorie)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Categorie  $categorie
     * @return mixed
     */
    public function delete(User $user, Categorie $categorie)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Categorie  $categorie
     * @return mixed
     */
    public function restore(User $user, Categorie $categorie)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Categorie  $categorie
     * @return mixed
     */
    public function forceDelete(User $user, Categorie $categorie)
    {
        //
    }
}
