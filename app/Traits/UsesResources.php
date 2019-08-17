<?php

namespace App\Traits;

use App\Models\CommonModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * trait UsesResources
 * @package App\Traits
 * @mixin CommonModel
 */
trait UsesResources
{
    public function resourceUsages(): MorphToMany
    {
        return $this->morphToMany(ResourceUsage::class, 'model_id', 'model_class');
    }

    public function consumesResources(): Builder
    {
        return $this->resourceUsages()->whereNotNull('consume_resource_id')->with('consumedResource');
    }

    public function requiresResources(): Builder
    {
        return $this->resourceUsages()->whereNotNull('require_resource_id')->with('requiredResource');
    }

    public function createsResources(): Builder
    {
        return $this->resourceUsages()->whereNotNull('create_resource_id')->with('createdResource');
    }
}
