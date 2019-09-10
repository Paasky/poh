<?php

use database\seeds\data\Abilities;
use database\seeds\data\Biomes;
use database\seeds\data\Buildings;
use database\seeds\data\CityTypes;
use database\seeds\data\Features;
use database\seeds\data\Landscapes;
use database\seeds\data\PohSeeder;
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
        $this->seedDataset(new Biomes());
        $this->seedDataset(new Terrains());
        $this->seedDataset(new Landscapes());
        $this->seedDataset(new Features());
        $this->seedDataset(new CityTypes());
        $this->seedDataset(new Technologies());
        $this->seedDataset(new TechRequirements());
        $this->seedDataset(new Resources());
        $this->seedDataset(new Buildings());
        // todo district types
        // todo event types
        // todo improvement types
        $this->seedDataset(new UnitTypes());
        // todo unit upgrades types
        // todo unit promotion types
        $this->seedDataset(new Abilities());
        // todo civilizations

    }

    private function seedDataset(PohSeeder $seeder)
    {
        echo "Seeding $seeder->model";

        if (!$seeder->idColumn) {
            $table = $seeder->model::getTable();
            $sql = "TRUNCATE TABLE $table";
            DB::statement($sql);
        }

        $seeder->preProcessData();

        foreach ($seeder->data as $params) {
            echo '.';
            if ($seeder->idColumn) {
                $seeder->model::updateOrCreate([$seeder->idColumn => $params[$seeder->idColumn]], $params);
            } else {
                $seeder->model::create($params);
            }
        }

        echo PHP_EOL;
    }
}
