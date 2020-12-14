<?php

namespace Farouter\Models;

use Str;
use Farouter\Models\Nodes\Node;

abstract class AbstractData extends BaseModel
{
    protected $guarded = [];

    public function __construct(array $attributes = [])
    {
        $this->setTable(Str::plural(Str::snake(class_basename($this))));
        parent::__construct($attributes);
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($data) {

            $node = Node::create([
                'parent_id' => $data->parent_id,
                'resource_id' => 1,
            ]);

            $data->node_id = $node->id;

            unset($data->parent_id);
        });
    }
}
