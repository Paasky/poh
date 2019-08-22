<?php

namespace database\seeds\data;

use App\Models\PohModel;
use App\Models\Types\Resource;

class Resources extends PohSeeder
{
    public $model = Resource::class;
    public $data = [
        [
            'model' => PohModel::RESOURCE_COPPER,
            'title' => 'Copper',
            'icon' => '',
            'type' => 'strategic',
            'technology_model' => PohModel::TECH_STONE_WORKING,
        ],
        [
            'model' => PohModel::RESOURCE_TIN,
            'title' => 'Tin',
            'icon' => '',
            'type' => 'strategic',
            'technology_model' => PohModel::TECH_MINING,
        ],
        [
            'model' => PohModel::RESOURCE_HORSE,
            'title' => 'Horse',
            'icon' => '',
            'type' => 'strategic',
            'technology_model' => PohModel::TECH_ANIMAL_HUSBANDRY,
        ],
        [
            'model' => PohModel::RESOURCE_IRON,
            'title' => 'Iron',
            'icon' => '',
            'type' => 'strategic',
            'technology_model' => PohModel::TECH_ARTISANSHIP,
        ],
        [
            'model' => PohModel::RESOURCE_COAL,
            'title' => 'Coal',
            'icon' => '',
            'type' => 'strategic',
            'technology_model' => PohModel::TECH_METAL_CASTING,
        ],
        [
            'model' => PohModel::RESOURCE_OIL,
            'title' => 'Oil',
            'icon' => '',
            'type' => 'strategic',
            'technology_model' => PohModel::TECH_NITROGLYCERIN,
        ],
        [
            'model' => PohModel::RESOURCE_GAS,
            'title' => 'Gas',
            'icon' => '',
            'type' => 'strategic',
            'technology_model' => PohModel::TECH_INDUSTRIALIZATION,
        ],
        [
            'model' => PohModel::RESOURCE_ALUMINUM,
            'title' => 'Aluminum',
            'icon' => '',
            'type' => 'strategic',
            'technology_model' => PohModel::TECH_REPLACEABLE_PARTS,
        ],
        [
            'model' => PohModel::RESOURCE_URANIUM,
            'title' => 'Uranium',
            'icon' => '',
            'type' => 'strategic',
            'technology_model' => PohModel::TECH_ATOMIC_THEORY,
        ],

        [
            'model' => PohModel::RESOURCE_GAME,
            'title' => 'Game',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'model' => PohModel::RESOURCE_COWS,
            'title' => 'Cows',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'model' => PohModel::RESOURCE_SHEEP,
            'title' => 'Sheep',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'model' => PohModel::RESOURCE_PIGS,
            'title' => 'Pigs',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'model' => PohModel::RESOURCE_WHEAT,
            'title' => 'Wheat',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'model' => PohModel::RESOURCE_RICE,
            'title' => 'Rice',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'model' => PohModel::RESOURCE_OAT,
            'title' => 'Oat',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'model' => PohModel::RESOURCE_RYE,
            'title' => 'Rye',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'model' => PohModel::RESOURCE_MAIZE,
            'title' => 'Maize',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'model' => PohModel::RESOURCE_QUINOA,
            'title' => 'Quinoa',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'model' => PohModel::RESOURCE_POTATO,
            'title' => 'Potato',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'model' => PohModel::RESOURCE_FISH,
            'title' => 'Fish',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'model' => PohModel::RESOURCE_SHELLFISH,
            'title' => 'Shellfish',
            'icon' => '',
            'type' => 'food',
        ],

        [
            'model' => PohModel::RESOURCE_SILVER,
            'title' => 'Silver',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'model' => PohModel::RESOURCE_GOLD,
            'title' => 'Gold',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'model' => PohModel::RESOURCE_DIAMONDS,
            'title' => 'Diamonds',
            'icon' => '',
            'type' => 'luxury',
            'technology_model' => PohModel::TECH_IRON_WORKING,
        ],
        [
            'model' => PohModel::RESOURCE_MARBLE,
            'title' => 'Marble',
            'icon' => '',
            'type' => 'luxury',
            'technology_model' => PohModel::TECH_IRON_WORKING,
        ],
        [
            'model' => PohModel::RESOURCE_PEARLS,
            'title' => 'Pearls',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'model' => PohModel::RESOURCE_INCENSE,
            'title' => 'Incense',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'model' => PohModel::RESOURCE_WHALE,
            'title' => 'Whale',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'model' => PohModel::RESOURCE_COTTON,
            'title' => 'Cotton',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'model' => PohModel::RESOURCE_SUGAR,
            'title' => 'Sugar',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'model' => PohModel::RESOURCE_TOBACCO,
            'title' => 'Tobacco',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'model' => PohModel::RESOURCE_SILK,
            'title' => 'Silk',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'model' => PohModel::RESOURCE_SPICES,
            'title' => 'Spices',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'model' => PohModel::RESOURCE_TEA,
            'title' => 'Tea',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'model' => PohModel::RESOURCE_COFFEE,
            'title' => 'Coffee',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'model' => PohModel::RESOURCE_JADE,
            'title' => 'Jade',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'model' => PohModel::RESOURCE_IVORY,
            'title' => 'Ivory',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'model' => PohModel::RESOURCE_SEAL,
            'title' => 'Seal',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'model' => PohModel::RESOURCE_FUR,
            'title' => 'Fur',
            'icon' => '',
            'type' => 'luxury',
        ],

        [
            'model' => PohModel::RESOURCE_BRONZE,
            'title' => 'Bronze',
            'icon' => '',
            'type' => 'generated',
            'technology_model' => PohModel::TECH_BRONZE_WORKING,
        ],
        [
            'model' => PohModel::RESOURCE_STEEL,
            'title' => 'Steel',
            'icon' => '',
            'type' => 'generated',
            'technology_model' => PohModel::TECH_STEEL,
        ],
        [
            'model' => PohModel::RESOURCE_ELECTRICITY,
            'title' => 'Electricity',
            'icon' => '',
            'type' => 'generated',
            'technology_model' => PohModel::TECH_ELECTRICITY,
        ],
        [
            'model' => PohModel::RESOURCE_GASOLINE,
            'title' => 'Gasoline',
            'icon' => '',
            'type' => 'generated',
            'technology_model' => PohModel::TECH_COMBUSTION,
        ],
        [
            'model' => PohModel::RESOURCE_FERTILIZER,
            'title' => 'Fertilizer',
            'icon' => '',
            'type' => 'generated',
            'technology_model' => PohModel::TECH_FERTILIZER,
        ],
        [
            'model' => PohModel::RESOURCE_MEDICINE,
            'title' => 'Medicine',
            'icon' => '',
            'type' => 'generated',
            'technology_model' => PohModel::TECH_PENICILLIN,
        ],
        [
            'model' => PohModel::RESOURCE_PROCESSED_FOOD,
            'title' => 'Processed Food',
            'icon' => '',
            'type' => 'generated',
            'technology_model' => PohModel::TECH_PLASTICS,
        ],
    ];
}
