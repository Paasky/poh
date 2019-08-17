<?php

use App\Models\CommonModel;
use database\seeds\data\Biomes;
use database\seeds\data\CityTypes;
use database\seeds\data\Features;
use database\seeds\data\Landscapes;
use database\seeds\data\Resources;
use database\seeds\data\Technologies;
use database\seeds\data\Terrains;
use database\seeds\data\UnitTypes;
use Illuminate\Database\Seeder;

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
        // todo tech requirements
        $this->seedDataset(Resources::MODEL, Resources::DATA);
        // todo building types
        // todo district types
        // todo event types
        // todo improvement types
        $this->seedDataset(UnitTypes::MODEL, UnitTypes::DATA);
        // todo unit upgrades types
        // todo unit promotion types
        // todo abilities types
        // todo civilizations

    }

    /**
     * @param string|CommonModel $model
     * @param array $data
     */
    private function seedDataset(string $model, array $data)
    {
        echo "Seeding $model";

        foreach ($data as $params) {
            echo '.';
            $model::createOrUpdate($params);
        }

        echo PHP_EOL;
    }
}
