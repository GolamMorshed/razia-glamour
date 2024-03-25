<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class DashboardPolicy
{
    public function viewUserPolicy(User $user)
    {
        return $user->isAdmin();
    }
}
