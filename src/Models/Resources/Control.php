<?php

namespace Farouter\Models\Resources;

use Farouter\Models\BaseModel;
use Farouter\Events\{
    Control\Created,
};

class Control extends BaseModel
{
    protected $fillable = [
        'resource_id',
        'name',
    ];

    protected $dispatchesEvents = [
        'created' => Created::class,
    ];

    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }
}
