<?php

use App\Models\PohModel;
use database\seeds\data\Abilities;
use database\seeds\data\Biomes;
use database\seeds\data\CityTypes;
use database\seeds\data\Features;
use database\seeds\data\Landscapes;
use database\seeds\data\Resources;
use database\seeds\data\Technologies;
use database\seeds\data\TechRequirements;
use database\seeds\data\Terrains;
use database\seeds\data\UnitTypes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->seedDataset(Biomes::MODEL, Biomes::DATA);
        $this->seedDataset(Terrains::MODEL, Terrains::DATA);
        $this->seedDataset(Landscapes::MODEL, Landscapes::DATA);
        $this->seedDataset(Features::MODEL, Features::DATA);
        $this->seedDataset(CityTypes::MODEL, CityTypes::DATA);
        $this->seedDataset(Technologies::MODEL, Technologies::DATA);
        $this->seedDataset(TechRequirements::MODEL, TechRequirements::DATA);
        $this->seedDataset(Resources::MODEL, Resources::DATA);
        // todo building types
        // todo district types
        // todo event types
        // todo improvement types
        $this->seedDataset(UnitTypes::MODEL, UnitTypes::DATA);
        // todo unit upgrades types
        // todo unit promotion types
        $this->seedDataset(Abilities::MODEL, Abilities::DATA);
        // todo civilizations

    }

    /**
     * @param string|PohModel $model
     * @param array $data
     * @param string $idColumn
     */
    private function seedDataset(PohSeeder $seeder)
    {
        echo "Seeding $seeder->model";

        if (!$seeder->idColumn) {
            $table = $model::getTable();
            $sql = "TRUNCATE TABLE $table";
            DB::statement($sql);
        }

        foreach ($data as $params) {
            echo '.';
            if ($idColumn) {
                $model::updateOrCreate([$idColumn => $params[$idColumn]], $params);
            } else {
                $model::create($params);
            }
        }

        echo PHP_EOL;
    }
}
