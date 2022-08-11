<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;

    /**
     * Get the car models that owns the car
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function car_models() : HasMany
    {
        return $this->hasMany(CarModal::class);
    }

    /**
     * Get the users that owns the car
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function user() : BelongsToMany
    {
        return $this->belongsToMany(User::class)->using(CarUser::class);
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    public function location() : HasOne
    {
        return $this->hasOne(State::class, 'id');
    }

}
