<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'place',
        'datetime_from',
        'datetime_to',
        'user_id',
        'price',
    ];

    protected $casts = [
        'datetime_from' => 'datetime',
        'datetime_to' => 'datetime',
    ];


    public function scopeUser(Builder $query, User $user): Builder
    {
        return $query->where('user_id', $user->id);
    }

    public function scopeFilter(Builder $query, array $filter): Builder
    {
        foreach ($filter as $key => $value) {
            switch ($key) {
                case 'name':
                case 'description':
                    $query->where($key, 'LIKE', $value);
                    break;
                /**
                 * @todo add conditions for datetimes
                 */
                default:
                    $query->where($key, $value);
            }
        }
        return $query;
    }


    # ========= #
    # Relations #
    # ========= #

    /**
     * @return HasManyThrough
     */
    public function galleries(): HasManyThrough
    {
        return $this->hasManyThrough(Gallery::class, EventGallery::class, 'event_id', 'id', 'id');
    }

    /**
     * @return HasOne
     */
    public function organizator(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * @return HasMany
     */
    public function reports(): HasMany
    {
        return $this->hasMany(EventReport::class, 'event_id', 'id');
    }

    /**
     * @return HasManyThrough
     */
    public function tags(): HasManyThrough
    {
        return $this->hasManyThrough(Tag::class, EventTag::class, 'event_id', 'id', 'id');
    }

    /**
     * @return HasManyThrough
     */
    public function users(): HasManyThrough
    {
        return $this->hasManyThrough(User::class, EventUser::class, 'event_id', 'user_id', 'id');
    }
}
