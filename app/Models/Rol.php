<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Rol extends Model {

    use HasUuids;

    protected $fillable = [
        'id',
        'name',
        'code',
    ];

    /**
     * Get the users for the rol.
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }



}
