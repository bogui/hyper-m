<?php

namespace App\Values;

use App\Casts\PlanPermissions as PlanPermissionsCast;
use Illuminate\Contracts\Database\Eloquent\Castable;

class PlanPermissions implements Castable
{
    public string $inv_count;
    public string $usr_count;

    public static function castUsing(array $arguments)
    {
        return PlanPermissionsCast::class;
    }
}
