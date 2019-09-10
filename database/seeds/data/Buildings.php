<?php

namespace database\seeds\data;

use App\Models\PohModel;
use App\Models\Types\BuildingType;

class Buildings extends PohSeeder
{
    public $model = BuildingType::class;
    public $data = [
        [
            'model' => PohModel::BUILDING_PIER,
            'title' => 'Pier',
            'icon' => '',
            'cost' => 10,
        ],
        [
            'model' => PohModel::BUILDING_HARBOR,
            'title' => 'Harbor',
            'icon' => '',
            'cost' => 60,
        ],
        [
            'model' => PohModel::BUILDING_LIGHTHOUSE,
            'title' => 'Lighthouse',
            'icon' => '',
            'cost' => 60,
        ],
        [
            'model' => PohModel::BUILDING_PORT,
            'title' => 'Port',
            'icon' => '',
            'cost' => 300,
        ],
        [
            'model' => PohModel::BUILDING_OCEAN_LIGHTHOUSE,
            'title' => 'Ocean Lighthouse',
            'icon' => '',
            'cost' => 400,
        ],
        [
            'model' => PohModel::BUILDING_CONTAINER_DOCK,
            'title' => 'Container Dock',
            'icon' => '',
            'cost' => 670,
        ],
        [
            'model' => PohModel::BUILDING_BOATYARD,
            'title' => 'Boatyard',
            'icon' => '',
            'cost' => 30,
        ],
        [
            'model' => PohModel::BUILDING_DRYDOCK,
            'title' => 'Drydock',
            'icon' => '',
            'cost' => 240,
        ],
        [
            'model' => PohModel::BUILDING_SHIPYARD,
            'title' => 'Shipyard',
            'icon' => '',
            'cost' => 470,
        ],
        [
            'model' => PohModel::BUILDING_SHRINE,
            'title' => 'Shrine',
            'icon' => '',
            'cost' => 10,
        ],
        [
            'model' => PohModel::BUILDING_PRIESTS_SCHOOL,
            'title' => 'Priest’s School',
            'icon' => '',
            'cost' => 30,
        ],
        [
            'model' => PohModel::BUILDING_TEMPLE,
            'title' => 'Temple',
            'icon' => '',
            'cost' => 40,
        ],
        [
            'model' => PohModel::BUILDING_CHURCH,
            'title' => 'Church',
            'icon' => '',
            'cost' => 110,
        ],
        [
            'model' => PohModel::BUILDING_MONASTERY,
            'title' => 'Monastery',
            'icon' => '',
            'cost' => 120,
        ],
        [
            'model' => PohModel::BUILDING_CATHEDRAL,
            'title' => 'Cathedral',
            'icon' => '',
            'cost' => 150,
        ],
        [
            'model' => PohModel::BUILDING_SMITH,
            'title' => 'Smith',
            'icon' => '',
            'cost' => 10,
        ],
        [
            'model' => PohModel::BUILDING_METAL_SMITH,
            'title' => 'Metal Smith',
            'icon' => '',
            'cost' => 150,
        ],
        [
            'model' => PohModel::BUILDING_BLACKSMITH,
            'title' => 'Blacksmith',
            'icon' => '',
            'cost' => 160,
        ],
        [
            'model' => PohModel::BUILDING_ENGINEERS_GUILD,
            'title' => 'Engineer’s Guild',
            'icon' => '',
            'cost' => 170,
        ],
        [
            'model' => PohModel::BUILDING_MANUFACTURY,
            'title' => 'Manufactury',
            'icon' => '',
            'cost' => 210,
        ],
        [
            'model' => PohModel::BUILDING_WORKSHOP,
            'title' => 'Workshop',
            'icon' => '',
            'cost' => 240,
        ],
        [
            'model' => PohModel::BUILDING_BLAST_FURNACE,
            'title' => 'Blast Furnace',
            'icon' => '',
            'cost' => 300,
        ],
        [
            'model' => PohModel::BUILDING_FACTORY,
            'title' => 'Factory',
            'icon' => '',
            'cost' => 350,
        ],
        [
            'model' => PohModel::BUILDING_IRONWORKS,
            'title' => 'Ironworks',
            'icon' => '',
            'cost' => 370,
        ],
        [
            'model' => PohModel::BUILDING_ASSEMBLY_LINE,
            'title' => 'Assembly Line',
            'icon' => '',
            'cost' => 490,
        ],
        [
            'model' => PohModel::BUILDING_BRONZE_SMITH,
            'title' => 'Bronze Smith',
            'icon' => '',
            'cost' => 20,
        ],
        [
            'model' => PohModel::BUILDING_IRON_SMITH,
            'title' => 'Iron Smith',
            'icon' => '',
            'cost' => 50,
        ],
        [
            'model' => PohModel::BUILDING_GAS_WORKS,
            'title' => 'Gas Works',
            'icon' => '',
            'cost' => 380,
        ],
        [
            'model' => PohModel::BUILDING_STEEL_MILL,
            'title' => 'Steel Mill',
            'icon' => '',
            'cost' => 420,
        ],
        [
            'model' => PohModel::BUILDING_COAL_PLANT,
            'title' => 'Coal Plant',
            'icon' => '',
            'cost' => 440,
        ],
        [
            'model' => PohModel::BUILDING_HYDRO_PLANT,
            'title' => 'Hydro Plant',
            'icon' => '',
            'cost' => 510,
        ],
        [
            'model' => PohModel::BUILDING_GAS_PLANT,
            'title' => 'Gas Plant',
            'icon' => '',
            'cost' => 550,
        ],
        [
            'model' => PohModel::BUILDING_NUCLEAR_PLANT,
            'title' => 'Nuclear Plant',
            'icon' => '',
            'cost' => 570,
        ],
        [
            'model' => PohModel::BUILDING_GEOTHERMAL_PLANT,
            'title' => 'Geothermal Plant',
            'icon' => '',
            'cost' => 630,
        ],
        [
            'model' => PohModel::BUILDING_GRANARY,
            'title' => 'Granary',
            'icon' => '',
            'cost' => 10,
        ],
        [
            'model' => PohModel::BUILDING_FOOD_STORE,
            'title' => 'Food Store',
            'icon' => '',
            'cost' => 150,
        ],
        [
            'model' => PohModel::BUILDING_WATERMILL,
            'title' => 'Watermill',
            'icon' => '',
            'cost' => 170,
        ],
        [
            'model' => PohModel::BUILDING_WINDMILL,
            'title' => 'Windmill',
            'icon' => '',
            'cost' => 170,
        ],
        [
            'model' => PohModel::BUILDING_DEPARTMENT_STORE,
            'title' => 'Department Store',
            'icon' => '',
            'cost' => 400,
        ],
        [
            'model' => PohModel::BUILDING_SUPERMARKET,
            'title' => 'Supermarket',
            'icon' => '',
            'cost' => 470,
        ],
        [
            'model' => PohModel::BUILDING_CESSPOOL,
            'title' => 'Cesspool',
            'icon' => '',
            'cost' => 30,
        ],
        [
            'model' => PohModel::BUILDING_GARDEN,
            'title' => 'Garden',
            'icon' => '',
            'cost' => 60,
        ],
        [
            'model' => PohModel::BUILDING_AQUEDUCT,
            'title' => 'Aqueduct',
            'icon' => '',
            'cost' => 90,
        ],
        [
            'model' => PohModel::BUILDING_BATH_HOUSE,
            'title' => 'Bath House',
            'icon' => '',
            'cost' => 100,
        ],
        [
            'model' => PohModel::BUILDING_HOSPITAL,
            'title' => 'Hospital',
            'icon' => '',
            'cost' => 350,
        ],
        [
            'model' => PohModel::BUILDING_SEWER,
            'title' => 'Sewer',
            'icon' => '',
            'cost' => 420,
        ],
        [
            'model' => PohModel::BUILDING_METRO,
            'title' => 'Metro',
            'icon' => '',
            'cost' => 440,
        ],
        [
            'model' => PohModel::BUILDING_PHARMACY,
            'title' => 'Pharmacy',
            'icon' => '',
            'cost' => 490,
        ],
        [
            'model' => PohModel::BUILDING_MOTORWAY,
            'title' => 'Motorway',
            'icon' => '',
            'cost' => 570,
        ],
        [
            'model' => PohModel::BUILDING_SEWAGE_TREATMENT,
            'title' => 'Sewage Treatment',
            'icon' => '',
            'cost' => 610,
        ],
        [
            'model' => PohModel::BUILDING_RECYCLING_CENTER,
            'title' => 'Recycling Center',
            'icon' => '',
            'cost' => 630,
        ],
        [
            'model' => PohModel::BUILDING_INCINERATOR,
            'title' => 'Incinerator',
            'icon' => '',
            'cost' => 690,
        ],
        [
            'model' => PohModel::BUILDING_MONUMENT,
            'title' => 'Monument',
            'icon' => '',
            'cost' => 10,
        ],
        [
            'model' => PohModel::BUILDING_PYRAMID,
            'title' => 'Pyramid',
            'icon' => '',
            'cost' => 10,
        ],
        [
            'model' => PohModel::BUILDING_OPEN_THEATER,
            'title' => 'Open Theater',
            'icon' => '',
            'cost' => 80,
        ],
        [
            'model' => PohModel::BUILDING_GALLERY,
            'title' => 'Gallery',
            'icon' => '',
            'cost' => 230,
        ],
        [
            'model' => PohModel::BUILDING_PRINTING_PRESS,
            'title' => 'Printing Press',
            'icon' => '',
            'cost' => 250,
        ],
        [
            'model' => PohModel::BUILDING_THEATER,
            'title' => 'Theater',
            'icon' => '',
            'cost' => 290,
        ],
        [
            'model' => PohModel::BUILDING_TELEGRAPH,
            'title' => 'Telegraph',
            'icon' => '',
            'cost' => 400,
        ],
        [
            'model' => PohModel::BUILDING_ART_GALLERY,
            'title' => 'Art Gallery',
            'icon' => '',
            'cost' => 420,
        ],
        [
            'model' => PohModel::BUILDING_WIRELESS,
            'title' => 'Wireless',
            'icon' => '',
            'cost' => 460,
        ],
        [
            'model' => PohModel::BUILDING_PALISADES,
            'title' => 'Palisades',
            'icon' => '',
            'cost' => 10,
        ],
        [
            'model' => PohModel::BUILDING_WALLS,
            'title' => 'Walls',
            'icon' => '',
            'cost' => 30,
        ],
        [
            'model' => PohModel::BUILDING_GARRISON,
            'title' => 'Garrison',
            'icon' => '',
            'cost' => 80,
        ],
        [
            'model' => PohModel::BUILDING_CASTLE,
            'title' => 'Castle',
            'icon' => '',
            'cost' => 170,
        ],
        [
            'model' => PohModel::BUILDING_SIEGE_WALLS,
            'title' => 'Siege Walls',
            'icon' => '',
            'cost' => 180,
        ],
        [
            'model' => PohModel::BUILDING_ARSENAL,
            'title' => 'Arsenal',
            'icon' => '',
            'cost' => 210,
        ],
        [
            'model' => PohModel::BUILDING_CIVIL_DEFENSE,
            'title' => 'Civil Defense',
            'icon' => '',
            'cost' => 490,
        ],
        [
            'model' => PohModel::BUILDING_COURTHOUSE,
            'title' => 'Courthouse',
            'icon' => '',
            'cost' => 40,
        ],
        [
            'model' => PohModel::BUILDING_STATUE,
            'title' => 'Statue',
            'icon' => '',
            'cost' => 70,
        ],
        [
            'model' => PohModel::BUILDING_ARENA,
            'title' => 'Arena',
            'icon' => '',
            'cost' => 100,
        ],
        [
            'model' => PohModel::BUILDING_DOCTORS_GUILD,
            'title' => 'Doctor’s Guild',
            'icon' => '',
            'cost' => 200,
        ],
        [
            'model' => PohModel::BUILDING_TOWN_HALL,
            'title' => 'Town Hall',
            'icon' => '',
            'cost' => 230,
        ],
        [
            'model' => PohModel::BUILDING_COFFEE_HOUSE,
            'title' => 'Coffee House',
            'icon' => '',
            'cost' => 320,
        ],
        [
            'model' => PohModel::BUILDING_STREET_LIGHTING,
            'title' => 'Street Lighting',
            'icon' => '',
            'cost' => 380,
        ],
        [
            'model' => PohModel::BUILDING_UNION_HOUSE,
            'title' => 'Union House',
            'icon' => '',
            'cost' => 440,
        ],
        [
            'model' => PohModel::BUILDING_SHOPPING_MALL,
            'title' => 'Shopping Mall',
            'icon' => '',
            'cost' => 590,
        ],
        [
            'model' => PohModel::BUILDING_SCRIBERY,
            'title' => 'Scribery',
            'icon' => '',
            'cost' => 20,
        ],
        [
            'model' => PohModel::BUILDING_LIBRARY,
            'title' => 'Library',
            'icon' => '',
            'cost' => 50,
        ],
        [
            'model' => PohModel::BUILDING_PHILOSOPHERS_SCHOOL,
            'title' => 'Philosopher’s School',
            'icon' => '',
            'cost' => 80,
        ],
        [
            'model' => PohModel::BUILDING_BOOKMAKER,
            'title' => 'Bookmaker',
            'icon' => '',
            'cost' => 110,
        ],
        [
            'model' => PohModel::BUILDING_SCRIBES_GUILD,
            'title' => 'Scribe’s Guild',
            'icon' => '',
            'cost' => 200,
        ],
        [
            'model' => PohModel::BUILDING_OBSERVATORY,
            'title' => 'Observatory',
            'icon' => '',
            'cost' => 250,
        ],
        [
            'model' => PohModel::BUILDING_UNIVERSITY,
            'title' => 'University',
            'icon' => '',
            'cost' => 270,
        ],
        [
            'model' => PohModel::BUILDING_CHEMISTRY_LAB,
            'title' => 'Chemistry Lab',
            'icon' => '',
            'cost' => 290,
        ],
        [
            'model' => PohModel::BUILDING_PUBLIC_SCHOOL,
            'title' => 'Public School',
            'icon' => '',
            'cost' => 440,
        ],
        [
            'model' => PohModel::BUILDING_RESEARCH_LAB,
            'title' => 'Research Lab',
            'icon' => '',
            'cost' => 510,
        ],
        [
            'model' => PohModel::BUILDING_STABLE,
            'title' => 'Stable',
            'icon' => '',
            'cost' => 50,
        ],
        [
            'model' => PohModel::BUILDING_TRAINING_FIELD,
            'title' => 'Training Field',
            'icon' => '',
            'cost' => 70,
        ],
        [
            'model' => PohModel::BUILDING_ARCHERY_RANGE,
            'title' => 'Archery Range',
            'icon' => '',
            'cost' => 90,
        ],
        [
            'model' => PohModel::BUILDING_BARRACKS,
            'title' => 'Barracks',
            'icon' => '',
            'cost' => 380,
        ],
        [
            'model' => PohModel::BUILDING_RIFLE_FACTORY,
            'title' => 'Rifle Factory',
            'icon' => '',
            'cost' => 440,
        ],
        [
            'model' => PohModel::BUILDING_RIFLE_FACTORY,
            'title' => 'Rifle Factory',
            'icon' => '',
            'cost' => 440,
        ],
        [
            'model' => PohModel::BUILDING_TAX_COLLECTOR,
            'title' => 'Tax Collector',
            'icon' => '',
            'cost' => 20,
        ],
        [
            'model' => PohModel::BUILDING_TANNER,
            'title' => 'Tanner',
            'icon' => '',
            'cost' => 20,
        ],
        [
            'model' => PohModel::BUILDING_JEWELER,
            'title' => 'Jeweler',
            'icon' => '',
            'cost' => 30,
        ],
        [
            'model' => PohModel::BUILDING_GOVERNORS_OFFICE,
            'title' => 'Governor’s Office',
            'icon' => '',
            'cost' => 70,
        ],
        [
            'model' => PohModel::BUILDING_ADMINISTRATION,
            'title' => 'Administration',
            'icon' => '',
            'cost' => 130,
        ],
        [
            'model' => PohModel::BUILDING_WEAVERS_QUARTER,
            'title' => 'Weaver’s Quarter',
            'icon' => '',
            'cost' => 200,
        ],
        [
            'model' => PohModel::BUILDING_BANK,
            'title' => 'Bank',
            'icon' => '',
            'cost' => 210,
        ],
        [
            'model' => PohModel::BUILDING_STOCK_EXCHANGE,
            'title' => 'Stock Exchange',
            'icon' => '',
            'cost' => 320,
        ],
        [
            'model' => PohModel::BUILDING_COTTON_MILL,
            'title' => 'Cotton Mill',
            'icon' => '',
            'cost' => 330,
        ],
        [
            'model' => PohModel::BUILDING_BUSINESS_PARK,
            'title' => 'Business Park',
            'icon' => '',
            'cost' => 670,
        ],
        [
            'model' => PohModel::BUILDING_TECH_PARK,
            'title' => 'Tech Park',
            'icon' => '',
            'cost' => 710,
        ],
        [
            'model' => PohModel::BUILDING_MARKET,
            'title' => 'Market',
            'icon' => '',
            'cost' => 40,
        ],
        [
            'model' => PohModel::BUILDING_TRADERS_GUILD,
            'title' => 'Trader’s Guild',
            'icon' => '',
            'cost' => 180,
        ],
        [
            'model' => PohModel::BUILDING_WAREHOUSE,
            'title' => 'Warehouse',
            'icon' => '',
            'cost' => 290,
        ],
        [
            'model' => PohModel::BUILDING_CENTRAL_STATION,
            'title' => 'Central Station',
            'icon' => '',
            'cost' => 380,
        ],
        [
            'model' => PohModel::BUILDING_AIRFIELD,
            'title' => 'Airfield',
            'icon' => '',
            'cost' => 470,
        ],
        [
            'model' => PohModel::BUILDING_AIRPORT,
            'title' => 'Airport',
            'icon' => '',
            'cost' => 610,
        ],
        [
            'model' => PohModel::BUILDING_GUILD_HALL,
            'title' => 'Guild Hall',
            'icon' => '',
            'cost' => 160,
        ],
        [
            'model' => PohModel::BUILDING_SPIRITUAL_FESTIVAL,
            'title' => 'Spiritual Festival',
            'icon' => '',
            'cost' => -1,
        ],
        [
            'model' => PohModel::BUILDING_HARVEST_FESTIVAL,
            'title' => 'Harvest Festival',
            'icon' => '',
            'cost' => -1,
        ],
        [
            'model' => PohModel::BUILDING_CULTURE_FESTIVAL,
            'title' => 'Culture Festival',
            'icon' => '',
            'cost' => -1,
        ],
        [
            'model' => PohModel::BUILDING_CARNIVAL,
            'title' => 'Carnival',
            'icon' => '',
            'cost' => -1,
        ],
    ];
}
