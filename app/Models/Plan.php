<?php

namespace App\Models;

use App\Values\PlanPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $casts = [
        'permissions' => PlanPermissions::class
    ];
}
