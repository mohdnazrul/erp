<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'code',
        'description',
        'email',
        'phone',
        'address',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function orgUnits(): HasMany
    {
        return $this->hasMany(OrgUnit::class);
    }

    public function orgRoles(): HasMany
    {
        return $this->hasMany(OrgRole::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
