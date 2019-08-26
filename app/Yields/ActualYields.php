<?php

namespace App\Yields;

class ActualYields
{
    /** @var YieldsChanges */
    private $changes;

    public function __construct(YieldsChanges $changes)
    {
        $this->changes = $changes;
    }

    public function getFood(): float
    {
        return $this->getValue(
            $this->changes->getValue(YieldsChanges::TYPE_FOOD, YieldsChanges::MODE_LOCAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_FOOD, YieldsChanges::MODE_GLOBAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_FOOD, YieldsChanges::MODE_LOCAL_PERCENT),
            $this->changes->getValue(YieldsChanges::TYPE_FOOD, YieldsChanges::MODE_GLOBAL_PERCENT)
        );
    }

    public function getGold(): float
    {
        return $this->getValue(
            $this->changes->getValue(YieldsChanges::TYPE_GOLD, YieldsChanges::MODE_LOCAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_GOLD, YieldsChanges::MODE_GLOBAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_GOLD, YieldsChanges::MODE_LOCAL_PERCENT),
            $this->changes->getValue(YieldsChanges::TYPE_GOLD, YieldsChanges::MODE_GLOBAL_PERCENT)
        );
    }

    public function getProduction(): float
    {
        return $this->getValue(
            $this->changes->getValue(YieldsChanges::TYPE_PRODUCTION, YieldsChanges::MODE_LOCAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_PRODUCTION, YieldsChanges::MODE_GLOBAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_PRODUCTION, YieldsChanges::MODE_LOCAL_PERCENT),
            $this->changes->getValue(YieldsChanges::TYPE_PRODUCTION, YieldsChanges::MODE_GLOBAL_PERCENT)
        );
    }

    public function getCulture(): float
    {
        return $this->getValue(
            $this->changes->getValue(YieldsChanges::TYPE_CULTURE, YieldsChanges::MODE_LOCAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_CULTURE, YieldsChanges::MODE_GLOBAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_CULTURE, YieldsChanges::MODE_LOCAL_PERCENT),
            $this->changes->getValue(YieldsChanges::TYPE_CULTURE, YieldsChanges::MODE_GLOBAL_PERCENT)
        );
    }

    public function getResearch(): float
    {
        return $this->getValue(
            $this->changes->getValue(YieldsChanges::TYPE_RESEARCH, YieldsChanges::MODE_LOCAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_RESEARCH, YieldsChanges::MODE_GLOBAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_RESEARCH, YieldsChanges::MODE_LOCAL_PERCENT),
            $this->changes->getValue(YieldsChanges::TYPE_RESEARCH, YieldsChanges::MODE_GLOBAL_PERCENT)
        );
    }

    public function getReligion(): float
    {
        return $this->getValue(
            $this->changes->getValue(YieldsChanges::TYPE_RELIGION, YieldsChanges::MODE_LOCAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_RELIGION, YieldsChanges::MODE_GLOBAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_RELIGION, YieldsChanges::MODE_LOCAL_PERCENT),
            $this->changes->getValue(YieldsChanges::TYPE_RELIGION, YieldsChanges::MODE_GLOBAL_PERCENT)
        );
    }

    public function getHealth(): float
    {
        return $this->getValue(
            $this->changes->getValue(YieldsChanges::TYPE_HEALTH, YieldsChanges::MODE_LOCAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_HEALTH, YieldsChanges::MODE_GLOBAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_HEALTH, YieldsChanges::MODE_LOCAL_PERCENT),
            $this->changes->getValue(YieldsChanges::TYPE_HEALTH, YieldsChanges::MODE_GLOBAL_PERCENT)
        );
    }

    public function getOrder(): float
    {
        return $this->getValue(
            $this->changes->getValue(YieldsChanges::TYPE_ORDER, YieldsChanges::MODE_LOCAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_ORDER, YieldsChanges::MODE_GLOBAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_ORDER, YieldsChanges::MODE_LOCAL_PERCENT),
            $this->changes->getValue(YieldsChanges::TYPE_ORDER, YieldsChanges::MODE_GLOBAL_PERCENT)
        );
    }

    public function getCorruption(): float
    {
        return $this->getValue(
            $this->changes->getValue(YieldsChanges::TYPE_CORRUPTION, YieldsChanges::MODE_LOCAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_CORRUPTION, YieldsChanges::MODE_GLOBAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_CORRUPTION, YieldsChanges::MODE_LOCAL_PERCENT),
            $this->changes->getValue(YieldsChanges::TYPE_CORRUPTION, YieldsChanges::MODE_GLOBAL_PERCENT)
        );
    }

    public function getEspionage(): float
    {
        return $this->getValue(
            $this->changes->getValue(YieldsChanges::TYPE_ESPIONAGE, YieldsChanges::MODE_LOCAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_ESPIONAGE, YieldsChanges::MODE_GLOBAL_COUNT),
            $this->changes->getValue(YieldsChanges::TYPE_ESPIONAGE, YieldsChanges::MODE_LOCAL_PERCENT),
            $this->changes->getValue(YieldsChanges::TYPE_ESPIONAGE, YieldsChanges::MODE_GLOBAL_PERCENT)
        );
    }

    private function getValue(float $localCount, float $globalCount, float $localPercent, float $globalPercent): float
    {
        $count = $localCount + $globalCount;
        $percent =  (100 + $localPercent + $globalPercent) / 100;
        return round($count * $percent, 2);
    }
}
