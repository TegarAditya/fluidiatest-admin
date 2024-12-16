<?php

namespace App\Policies;

use App\Models\User;
use App\Models\QuestionBank;
use Illuminate\Auth\Access\HandlesAuthorization;

class QuestionBankPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_question::bank');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, QuestionBank $questionBank): bool
    {
        return $user->can('view_question::bank');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_question::bank');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, QuestionBank $questionBank): bool
    {
        return $user->can('update_question::bank');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, QuestionBank $questionBank): bool
    {
        return $user->can('delete_question::bank');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_question::bank');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, QuestionBank $questionBank): bool
    {
        return $user->can('force_delete_question::bank');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_question::bank');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, QuestionBank $questionBank): bool
    {
        return $user->can('restore_question::bank');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_question::bank');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, QuestionBank $questionBank): bool
    {
        return $user->can('replicate_question::bank');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_question::bank');
    }
}
