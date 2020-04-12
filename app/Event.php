<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     *
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}