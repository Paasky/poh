<?php


namespace App\Yields;

class ActualYields
{
    /** @var YieldsChanges */
    private $changes;

    public function withChanges(YieldsChanges $changes): self
    {
        $this->changes = $changes;
        return $this;
    }

    private function getFood(): float
    {
        $this->changes->getValue(YieldsChanges::TYPE_FOOD, YieldsChanges::MODE_LOCAL_COUNT);
    }

    private function getGold(): float
    {
        $this->changes->getValue(YieldsChanges::TYPE_GOLD, YieldsChanges::MODE_LOCAL_COUNT);
    }

    private function getProduction(): float
    {
        $this->changes->getValue(YieldsChanges::TYPE_PRODUCTION, YieldsChanges::MODE_LOCAL_COUNT);
    }

    private function getCulture(): float
    {
        $this->changes->getValue(YieldsChanges::TYPE_CULTURE, YieldsChanges::MODE_LOCAL_COUNT);
    }

    private function getResearch(): float
    {
        $this->changes->getValue(YieldsChanges::TYPE_RESEARCH, YieldsChanges::MODE_LOCAL_COUNT);
    }

    private function getReligion(): float
    {
        $this->changes->getValue(YieldsChanges::TYPE_RELIGION, YieldsChanges::MODE_LOCAL_COUNT);
    }

    private function getHealth(): float
    {
        $this->changes->getValue(YieldsChanges::TYPE_HEALTH, YieldsChanges::MODE_LOCAL_COUNT);
    }

    private function getOrder(): float
    {
        $this->changes->getValue(YieldsChanges::TYPE_ORDER, YieldsChanges::MODE_LOCAL_COUNT);
    }

    private function getCorruption(): float
    {
        $this->changes->getValue(YieldsChanges::TYPE_CORRUPTION, YieldsChanges::MODE_LOCAL_COUNT);
    }

    private function getEspionage(): float
    {
        $this->changes->getValue(YieldsChanges::TYPE_ESPIONAGE, YieldsChanges::MODE_LOCAL_COUNT);
    }
}
