<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Result;
use Illuminate\Auth\Access\HandlesAuthorization;

class ResultPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Result');
    }

    public function view(AuthUser $authUser, Result $result): bool
    {
        return $authUser->can('View:Result');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Result');
    }

    public function update(AuthUser $authUser, Result $result): bool
    {
        return $authUser->can('Update:Result');
    }

    public function delete(AuthUser $authUser, Result $result): bool
    {
        return $authUser->can('Delete:Result');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Result');
    }

    public function restore(AuthUser $authUser, Result $result): bool
    {
        return $authUser->can('Restore:Result');
    }

    public function forceDelete(AuthUser $authUser, Result $result): bool
    {
        return $authUser->can('ForceDelete:Result');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Result');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Result');
    }

    public function replicate(AuthUser $authUser, Result $result): bool
    {
        return $authUser->can('Replicate:Result');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Result');
    }

}