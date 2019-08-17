<?php


namespace App\Traits;

use App\Models\CommonModel;
use App\Models\Types\Yields;
use App\Yields\YieldsChanges;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * Class HasOutput
 * @package App\Traits
 * @mixin CommonModel
 * @property-read Collection|Yields[] $yields
 */
trait HasYields
{
    public function yields(): MorphToMany
    {
        return $this->morphToMany(Yields::class, 'model_id', 'model_class');
    }

    public function yieldsChanges(): YieldsChanges
    {
        return new YieldsChanges($this->yields);
    }
}
