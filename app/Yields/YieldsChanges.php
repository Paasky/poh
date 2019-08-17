<?php


namespace App\Yields;


use App\Models\Types\Yields;
use Illuminate\Support\Collection;

/**
 * Class YieldsChanges
 * @package App\Yields
 *
 * Usage:
 * - Create class by giving it a Collection of Yields that apply
 * - Constructor will automatically gather and store all output changes
 * - Use getValue to get the output changes
 */
class YieldsChanges
{
    private $values = [];
    private $trade = [];
    private $tradeRoutes = [
        'all' => 0,
        'land' => 0,
        'water' => 0,
        'air' => 0,
    ];

    private $localMode = false;
    private $percentMode = false;

    private $forBiome = 0;
    private $forTerrain = 0;
    private $forLandscape = 0;
    private $forFeature = 0;
    private $forResource = 0;

    private $forLandTrade = false;
    private $forWaterTrade = false;
    private $forAirTrade = false;

    public function __construct(Collection $yields)
    {
        /** @var Yields $output */
        foreach ($yields as $output) {
            $this->localMode = $output->is_local;
            $this->percentMode = $output->is_percent;

            $this->forBiome = $output->biome_id;
            $this->forTerrain = $output->terrain_id;
            $this->forLandscape = $output->landscape_id;
            $this->forFeature = $output->feature_id;
            $this->forResource = $output->resource_id;

            $this->forLandTrade = $output->trade_values_affect_land;
            $this->forWaterTrade = $output->trade_values_affect_water;
            $this->forAirTrade = $output->trade_values_affect_air;

            if ($output->food) {
                $this->addFood($output->food);
            }
            if ($output->gold) {
                $this->addGold($output->gold);
            }
            if ($output->production) {
                $this->addProduction($output->production);
            }
            if ($output->culture) {
                $this->addCulture($output->culture);
            }
            if ($output->research) {
                $this->addResearch($output->research);
            }
            if ($output->religion) {
                $this->addReligion($output->religion);
            }
            if ($output->health) {
                $this->addHealth($output->health);
            }
            if ($output->order) {
                $this->addOrder($output->order);
            }
            if ($output->corruption) {
                $this->addCorruption($output->corruption);
            }
            if ($output->espionage) {
                $this->addEspionage($output->espionage);
            }
            if ($output->trade_routes) {
                $this->addTradeRoutes($output->trade_routes);
            }
            if ($output->trade_gold) {
                $this->addTradeGold($output->trade_gold);
            }
            if ($output->trade_research) {
                $this->addTradeResearch($output->trade_research);
            }
            if ($output->trade_espionage) {
                $this->addTradeEspionage($output->trade_espionage);
            }
        }
    }

    private function addFood($value)
    {
        $this->addOutput($value, 'food');
    }

    private function addGold($value)
    {
        $this->addOutput($value, 'gold');
    }

    private function addProduction($value)
    {
        $this->addOutput($value, 'production');
    }

    private function addCulture($value)
    {
        $this->addOutput($value, 'culture');
    }

    private function addResearch($value)
    {
        $this->addOutput($value, 'research');
    }

    private function addReligion($value)
    {
        $this->addOutput($value, 'religion');
    }

    private function addHealth($value)
    {
        $this->addOutput($value, 'health');
    }

    private function addOrder($value)
    {
        $this->addOutput($value, 'order');
    }

    private function addCorruption($value)
    {
        $this->addOutput($value, 'corruption');
    }

    private function addEspionage($value)
    {
        $this->addOutput($value, 'espionage');
    }

    private function addOutput($value, string $yieldType)
    {
        $mode = $this->mode();

        // Add for all categories by default
        $categoryId = null;

        if ($categoryId = $this->forBiome) {
            $now = $this->values[$yieldType]['biomes'][$categoryId][$mode] ?? 0;
            $this->values[$yieldType]['biomes'][$categoryId][$mode] = round($now + $value, 2);
        }
        if ($categoryId = $this->forTerrain) {
            $now = $this->values[$yieldType]['terrains'][$categoryId][$mode] ?? 0;
            $this->values[$yieldType]['terrains'][$categoryId][$mode] = round($now + $value, 2);
        }
        if ($categoryId = $this->forLandscape) {
            $now = $this->values[$yieldType]['landscapes'][$categoryId][$mode] ?? 0;
            $this->values[$yieldType]['landscapes'][$categoryId][$mode] = round($now + $value, 2);
        }
        if ($categoryId = $this->forFeature) {
            $now = $this->values[$yieldType]['features'][$categoryId][$mode] ?? 0;
            $this->values[$yieldType]['features'][$categoryId][$mode] = round($now + $value, 2);
        }
        if ($categoryId = $this->forResource) {
            $now = $this->values[$yieldType]['resources'][$categoryId][$mode] ?? 0;
            $this->values[$yieldType]['resources'][$categoryId][$mode] = round($now + $value, 2);
        }

        // Add for all categories if none given
        if (!$categoryId) {
            $now = $this->values[$yieldType][$mode] ?? 0;
            $this->values[$yieldType][$mode] = round($now + $value, 2);
        }
    }

    private function addTradeRoutes($value)
    {
        if ($this->forLandTrade) {
            $this->tradeRoutes['land'] += $value;
        }
        if ($this->forWaterTrade) {
            $this->tradeRoutes['water'] += $value;
        }
        if ($this->forAirTrade) {
            $this->tradeRoutes['air'] += $value;
        }
    }

    private function addTradeGold($value)
    {
        $this->addTrade($value, 'gold');
    }

    private function addTradeResearch($value)
    {
        $this->addTrade($value, 'research');
    }

    private function addTradeEspionage($value)
    {
        $this->addTrade($value, 'espionage');
    }

    private function addTrade($value, string $yieldType)
    {
        if ($this->forLandTrade && $this->forWaterTrade && $this->forAirTrade) {
            $this->addTradeDomain($value, $yieldType, 'all');
        } else {
            if ($this->forLandTrade) {
                $this->addTradeDomain($value, $yieldType, 'land');
            }
            if ($this->forWaterTrade) {
                $this->addTradeDomain($value, $yieldType, 'water');
            }
            if ($this->forAirTrade) {
                $this->addTradeDomain($value, $yieldType, 'air');
            }
        }
    }

    private function addTradeDomain($value, string $yieldType, string $domain)
    {
        $mode = $this->mode();

        $now = $this->trade[$yieldType][$domain][$mode] ?? 0;
               $this->trade[$yieldType][$domain][$mode] = round($now + $value, 2);
    }

    public function getValue($yieldType, $mode, $category = null, $categoryId = null)
    {
        if (!$category) {
            return $this->values[$yieldType][$mode];
        }
        return $this->values[$yieldType][$category][$categoryId][$mode] ?? 0;
    }

    private function mode(): string
    {
        return
            ($this->localMode ? 'local' : 'global') .
            '_' .
            ($this->percentMode ? 'percent' : 'count');
    }
}
