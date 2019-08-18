<?php

namespace database\seeds\data;

class Resources
{
    const MODEL = \App\Models\Types\Resource::class;
    const DATA = [
        [
            'id' => 1,
            'title' => 'Copper',
            'icon' => '',
            'type' => 'strategic',
            'technology_id' => StoneWorking,
        ],
        [
            'id' => 2,
            'title' => 'Tin',
            'icon' => '',
            'type' => 'strategic',
            'technology_id' => Mining,
        ],
        [
            'id' => 3,
            'title' => 'Horse',
            'icon' => '',
            'type' => 'strategic',
            'technology_id' => AnimalHusbandry,
        ],
        [
            'id' => 4,
            'title' => 'Iron',
            'icon' => '',
            'type' => 'strategic',
            'technology_id' => Artisanship,
        ],
        [
            'id' => 5,
            'title' => 'Saltpeter',
            'icon' => '',
            'type' => 'strategic',
            'technology_id' => Gunpowder,
        ],
        [
            'id' => 6,
            'title' => 'Coal',
            'icon' => '',
            'type' => 'strategic',
            'technology_id' => MetalCasting,
        ],
        [
            'id' => 7,
            'title' => 'Oil',
            'icon' => '',
            'type' => 'strategic',
            'technology_id' => Nitroglycerin,
        ],
        [
            'id' => 8,
            'title' => 'Gas',
            'icon' => '',
            'type' => 'strategic',
            'technology_id' => Industrialization,
        ],
        [
            'id' => 9,
            'title' => 'Aluminum',
            'icon' => '',
            'type' => 'strategic',
            'technology_id' => ReplaceableParts,
        ],
        [
            'id' => 10,
            'title' => 'Uranium',
            'icon' => '',
            'type' => 'strategic',
            'technology_id' => AtomicTheory,
        ],

        [
            'id' => 11,
            'title' => 'Game',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'id' => 12,
            'title' => 'Cows',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'id' => 13,
            'title' => 'Sheep',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'id' => 14,
            'title' => 'Pigs',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'id' => 15,
            'title' => 'Wheat',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'id' => 16,
            'title' => 'Rice',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'id' => 17,
            'title' => 'Oat',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'id' => 18,
            'title' => 'Rye',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'id' => 19,
            'title' => 'Maize',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'id' => 20,
            'title' => 'Quinoa',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'id' => 21,
            'title' => 'Potato',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'id' => 22,
            'title' => 'Fish',
            'icon' => '',
            'type' => 'food',
        ],
        [
            'id' => 23,
            'title' => 'Shellfish',
            'icon' => '',
            'type' => 'food',
        ],

        [
            'id' => 24,
            'title' => 'Silver',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'id' => 25,
            'title' => 'Gold',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'id' => 26,
            'title' => 'Diamonds',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'id' => 27,
            'title' => 'Marble',
            'icon' => '',
            'type' => 'luxury',
            'technology_id' => IronWorking,
        ],
        [
            'id' => 28,
            'title' => 'Pearls',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'id' => 29,
            'title' => 'Incense',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'id' => 30,
            'title' => 'Whale',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'id' => 31,
            'title' => 'Cotton',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'id' => 32,
            'title' => 'Sugar',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'id' => 33,
            'title' => 'Tobacco',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'id' => 34,
            'title' => 'Silk',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'id' => 35,
            'title' => 'Spices',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'id' => 36,
            'title' => 'Tea',
            'icon' => '',
            'type' => 'luxury',
        ],
        [
            'id' => 37,
            'title' => 'Coffee',
            'icon' => '',
            'type' => 'luxury',
        ],

        [
            'id' => 38,
            'title' => 'Bronze',
            'icon' => '',
            'type' => 'generated',
            'technology_id' => BronzeWorking,
        ],
        [
            'id' => 39,
            'title' => 'Steel',
            'icon' => '',
            'type' => 'generated',
            'technology_id' => Steel,
        ],
        [
            'id' => 40,
            'title' => 'Electricity',
            'icon' => '',
            'type' => 'generated',
            'technology_id' => Electricity,
        ],
        [
            'id' => 41,
            'title' => 'Gasoline',
            'icon' => '',
            'type' => 'generated',
            'technology_id' => Combustion,
        ],
        [
            'id' => 42,
            'title' => 'Fertilizer',
            'icon' => '',
            'type' => 'generated',
            'technology_id' => Fertilizer,
        ],
        [
            'id' => 43,
            'title' => 'Medicine',
            'icon' => '',
            'type' => 'generated',
            'technology_id' => Penicillin,
        ],
        [
            'id' => 44,
            'title' => 'Processed Food',
            'icon' => '',
            'type' => 'generated',
            'technology_id' => Plastics,
        ],
        // jade
        // ivory
        // seal
        // fur
    ];
}
