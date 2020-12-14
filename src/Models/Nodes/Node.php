<?php

namespace Farouter\Models\Nodes;

use Farouter\Models\BaseModel;
use Farouter\Models\Resources\Resource;

class Node extends BaseModel
{
    protected $fillable = [
        'parent_id',
        'resource_id',
    ];

    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }
}
