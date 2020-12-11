<?php

namespace Farouter\Models\Resources;

use Farouter\Models\BaseModel;
use Farouter\Events\{
    Resource\Created,
    Resource\Deleted,
};

class Resource extends BaseModel
{
    protected $fillable = [
        'name',
    ];

    protected $dispatchesEvents = [
        'created' => Created::class,
        'deleted' => Deleted::class,
    ];

    public function controls()
    {
        return $this->hasMany(Control::class);
    }
}
