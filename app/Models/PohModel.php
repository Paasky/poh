<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PohModel
 * @package App\Models
 * @mixin Builder
 * @property int $id
 */
abstract class PohModel extends Model
{
    const ABILITY_VS_HEAVY_INF = 'vsHeavyInf';
    const ABILITY_VS_MOUNTED = 'vsMounted';
    const ABILITY_VS_DAMAGED = 'vsDamaged';
    const ABILITY_VS_AIR = 'vsAir';
    const ABILITY_VS_ARMOR = 'vsArmor';
    const ABILITY_VS_NUKE = 'vsNuke';
    const ABILITY_VS_RANGED = 'vsRanged';
    const ABILITY_IN_PLAIN = 'inPlain';
    const ABILITY_IN_HILL = 'inHill';
    const ABILITY_IN_MOUNTAIN = 'inMountain';
    const ABILITY_IN_FROZEN = 'inFrozen';
    const ABILITY_IN_DESERT = 'inDesert';
    const ABILITY_IN_FOREST = 'inForest';
    const ABILITY_IN_BUILT_UP = 'inBuiltUp';
    const ABILITY_IN_FORTS = 'inForts';
    const ABILITY_IN_CITY = 'vsCity';
    const ABILITY_CAN_CONSCRIPT = 'canConscript';
    const ABILITY_CAN_TARGET = 'canTarget';
    const ABILITY_CAN_SAIL_OCEAN = 'canSailOcean';
    const ABILITY_CAN_ENTER_MOUNTAINS = 'canEnterMountains';
    const ABILITY_MOVE_AFTER_ATTACK = 'moveAfterAttack';
    const ABILITY_MULTIPLE_ATTACKS = 'multipleAttacks';
    const ABILITY_STRENGTH = 'strength';
    const ABILITY_HIDDEN = 'hidden';
    const ABILITY_EVADE = 'evade';
    const ABILITY_INTERCEPT = 'intercept';

    const BIOME_ARCTIC = 'arctic';
    const BIOME_SUB_ARCTIC = 'subArctic';
    const BIOME_TEMPERATE = 'temperate';
    const BIOME_CONTINENTAL = 'continental';
    const BIOME_SUB_TROPIC = 'subTropic';
    const BIOME_ARID = 'arid';
    const BIOME_TROPIC = 'tropic';

    const BUILDING_PIER = 'BUILDING_PIER';
    const BUILDING_HARBOR = 'BUILDING_HARBOR';
    const BUILDING_LIGHTHOUSE = 'BUILDING_LIGHTHOUSE';
    const BUILDING_PORT = 'BUILDING_PORT';
    const BUILDING_OCEAN_LIGHTHOUSE = 'BUILDING_OCEAN_LIGHTHOUSE';
    const BUILDING_CONTAINER_DOCK = 'BUILDING_CONTAINER_DOCK';
    const BUILDING_BOATYARD = 'BUILDING_BOATYARD';
    const BUILDING_DRYDOCK = 'BUILDING_DRYDOCK';
    const BUILDING_SHIPYARD = 'BUILDING_SHIPYARD';
    const BUILDING_SHRINE = 'BUILDING_SHRINE';
    const BUILDING_PRIESTS_SCHOOL = 'BUILDING_PRIESTS_SCHOOL';
    const BUILDING_TEMPLE = 'BUILDING_TEMPLE';
    const BUILDING_CHURCH = 'BUILDING_CHURCH';
    const BUILDING_MONASTERY = 'BUILDING_MONASTERY';
    const BUILDING_CATHEDRAL = 'BUILDING_CATHEDRAL';
    const BUILDING_SMITH = 'BUILDING_SMITH';
    const BUILDING_METAL_SMITH = 'BUILDING_METAL_SMITH';
    const BUILDING_BLACKSMITH = 'BUILDING_BLACKSMITH';
    const BUILDING_ENGINEERS_GUILD = 'BUILDING_ENGINEERS_GUILD';
    const BUILDING_MANUFACTURY = 'BUILDING_MANUFACTURY';
    const BUILDING_WORKSHOP = 'BUILDING_WORKSHOP';
    const BUILDING_BLAST_FURNACE = 'BUILDING_BLAST_FURNACE';
    const BUILDING_FACTORY = 'BUILDING_FACTORY';
    const BUILDING_IRONWORKS = 'BUILDING_IRONWORKS';
    const BUILDING_ASSEMBLY_LINE = 'BUILDING_ASSEMBLY_LINE';
    const BUILDING_BRONZE_SMITH = 'BUILDING_BRONZE_SMITH';
    const BUILDING_IRON_SMITH = 'BUILDING_IRON_SMITH';
    const BUILDING_GAS_WORKS = 'BUILDING_GAS_WORKS';
    const BUILDING_STEEL_MILL = 'BUILDING_STEEL_MILL';
    const BUILDING_COAL_PLANT = 'BUILDING_COAL_PLANT';
    const BUILDING_HYDRO_PLANT = 'BUILDING_HYDRO_PLANT';
    const BUILDING_GAS_PLANT = 'BUILDING_GAS_PLANT';
    const BUILDING_NUCLEAR_PLANT = 'BUILDING_NUCLEAR_PLANT';
    const BUILDING_GEOTHERMAL_PLANT = 'BUILDING_GEOTHERMAL_PLANT';
    const BUILDING_GRANARY = 'BUILDING_GRANARY';
    const BUILDING_FOOD_STORE = 'BUILDING_FOOD_STORE';
    const BUILDING_WATERMILL = 'BUILDING_WATERMILL';
    const BUILDING_WINDMILL = 'BUILDING_WINDMILL';
    const BUILDING_DEPARTMENT_STORE = 'BUILDING_DEPARTMENT_STORE';
    const BUILDING_SUPERMARKET = 'BUILDING_SUPERMARKET';
    const BUILDING_CESSPOOL = 'BUILDING_CESSPOOL';
    const BUILDING_GARDEN = 'BUILDING_GARDEN';
    const BUILDING_AQUEDUCT = 'BUILDING_AQUEDUCT';
    const BUILDING_BATH_HOUSE = 'BUILDING_BATH_HOUSE';
    const BUILDING_HOSPITAL = 'BUILDING_HOSPITAL';
    const BUILDING_SEWER = 'BUILDING_SEWER';
    const BUILDING_METRO = 'BUILDING_METRO';
    const BUILDING_PHARMACY = 'BUILDING_PHARMACY';
    const BUILDING_MOTORWAY = 'BUILDING_MOTORWAY';
    const BUILDING_SEWAGE_TREATMENT = 'BUILDING_SEWAGE_TREATMENT';
    const BUILDING_RECYCLING_CENTER = 'BUILDING_RECYCLING_CENTER';
    const BUILDING_INCINERATOR = 'BUILDING_INCINERATOR';
    const BUILDING_MONUMENT = 'BUILDING_MONUMENT';
    const BUILDING_PYRAMID = 'BUILDING_PYRAMID';
    const BUILDING_OPEN_THEATER = 'BUILDING_OPEN_THEATER';
    const BUILDING_GALLERY = 'BUILDING_GALLERY';
    const BUILDING_PRINTING_PRESS = 'BUILDING_PRINTING_PRESS';
    const BUILDING_THEATER = 'BUILDING_THEATER';
    const BUILDING_TELEGRAPH = 'BUILDING_TELEGRAPH';
    const BUILDING_ART_GALLERY = 'BUILDING_ART_GALLERY';
    const BUILDING_WIRELESS = 'BUILDING_WIRELESS';
    const BUILDING_PALISADES = 'BUILDING_PALISADES';
    const BUILDING_WALLS = 'BUILDING_WALLS';
    const BUILDING_GARRISON = 'BUILDING_GARRISON';
    const BUILDING_CASTLE = 'BUILDING_CASTLE';
    const BUILDING_SIEGE_WALLS = 'BUILDING_SIEGE_WALLS';
    const BUILDING_ARSENAL = 'BUILDING_ARSENAL';
    const BUILDING_CIVIL_DEFENSE = 'BUILDING_CIVIL_DEFENSE';
    const BUILDING_COURTHOUSE = 'BUILDING_COURTHOUSE';
    const BUILDING_STATUE = 'BUILDING_STATUE';
    const BUILDING_ARENA = 'BUILDING_ARENA';
    const BUILDING_DOCTORS_GUILD = 'BUILDING_DOCTORS_GUILD';
    const BUILDING_TOWN_HALL = 'BUILDING_TOWN_HALL';
    const BUILDING_COFFEE_HOUSE = 'BUILDING_COFFEE_HOUSE';
    const BUILDING_STREET_LIGHTING = 'BUILDING_STREET_LIGHTING';
    const BUILDING_UNION_HOUSE = 'BUILDING_UNION_HOUSE';
    const BUILDING_SHOPPING_MALL = 'BUILDING_SHOPPING_MALL';
    const BUILDING_SCRIBERY = 'BUILDING_SCRIBERY';
    const BUILDING_LIBRARY = 'BUILDING_LIBRARY';
    const BUILDING_PHILOSOPHERS_SCHOOL = 'BUILDING_PHILOSOPHERS_SCHOOL';
    const BUILDING_BOOKMAKER = 'BUILDING_BOOKMAKER';
    const BUILDING_SCRIBES_GUILD = 'BUILDING_SCRIBES_GUILD';
    const BUILDING_OBSERVATORY = 'BUILDING_OBSERVATORY';
    const BUILDING_UNIVERSITY = 'BUILDING_UNIVERSITY';
    const BUILDING_CHEMISTRY_LAB = 'BUILDING_CHEMISTRY_LAB';
    const BUILDING_PUBLIC_SCHOOL = 'BUILDING_PUBLIC_SCHOOL';
    const BUILDING_RESEARCH_LAB = 'BUILDING_RESEARCH_LAB';
    const BUILDING_STABLE = 'BUILDING_STABLE';
    const BUILDING_TRAINING_FIELD = 'BUILDING_TRAINING_FIELD';
    const BUILDING_ARCHERY_RANGE = 'BUILDING_ARCHERY_RANGE';
    const BUILDING_BARRACKS = 'BUILDING_BARRACKS';
    const BUILDING_RIFLE_FACTORY = 'BUILDING_RIFLE_FACTORY';
    const BUILDING_TAX_COLLECTOR = 'BUILDING_TAX_COLLECTOR';
    const BUILDING_TANNER = 'BUILDING_TANNER';
    const BUILDING_JEWELER = 'BUILDING_JEWELER';
    const BUILDING_GOVERNORS_OFFICE = 'BUILDING_GOVERNORS_OFFICE';
    const BUILDING_ADMINISTRATION = 'BUILDING_ADMINISTRATION';
    const BUILDING_WEAVERS_QUARTER = 'BUILDING_WEAVERS_QUARTER';
    const BUILDING_BANK = 'BUILDING_BANK';
    const BUILDING_STOCK_EXCHANGE = 'BUILDING_STOCK_EXCHANGE';
    const BUILDING_COTTON_MILL = 'BUILDING_COTTON_MILL';
    const BUILDING_BUSINESS_PARK = 'BUILDING_BUSINESS_PARK';
    const BUILDING_TECH_PARK = 'BUILDING_TECH_PARK';
    const BUILDING_MARKET = 'BUILDING_MARKET';
    const BUILDING_TRADERS_GUILD = 'BUILDING_TRADERS_GUILD';
    const BUILDING_WAREHOUSE = 'BUILDING_WAREHOUSE';
    const BUILDING_CENTRAL_STATION = 'BUILDING_CENTRAL_STATION';
    const BUILDING_AIRFIELD = 'BUILDING_AIRFIELD';
    const BUILDING_AIRPORT = 'BUILDING_AIRPORT';
    const BUILDING_GUILD_HALL = 'BUILDING_GUILD_HALL';
    const BUILDING_SPIRITUAL_FESTIVAL = 'BUILDING_SPIRITUAL_FESTIVAL';
    const BUILDING_HARVEST_FESTIVAL = 'BUILDING_HARVEST_FESTIVAL';
    const BUILDING_CULTURE_FESTIVAL = 'BUILDING_CULTURE_FESTIVAL';
    const BUILDING_CARNIVAL = 'BUILDING_CARNIVAL';


    const CITY_VILLAGE = 'village';
    const CITY_HAMLET = 'hamlet';
    const CITY_TOWN = 'town';
    const CITY_CITY = 'city';
    const CITY_METROPOLIS = 'metropolis';
    const CITY_MEGALOPOLIS = 'megalopolis';

    const FEATURE_TAIGA = 'taiga';
    const FEATURE_LUSH_FOREST = 'lushForest';
    const FEATURE_PINE_FOREST = 'pineForest';
    const FEATURE_DRY_FOREST = 'dryForest';
    const FEATURE_RAIN_FOREST = 'rainForest';
    const FEATURE_SWAMP = 'swamp';
    const FEATURE_FLOOD_PLAIN = 'floodPlain';
    const FEATURE_DELTA = 'delta';
    const FEATURE_SALT_PLAIN = 'saltPlain';
    const FEATURE_OASIS = 'oasis';

    const LANDSCAPE_WATER = 'water';
    const LANDSCAPE_CANYON = 'canyon';
    const LANDSCAPE_FLAT = 'flat';
    const LANDSCAPE_HILLS = 'hills';
    const LANDSCAPE_STEEP_HILLS = 'steepHills';
    const LANDSCAPE_MOUNTAINS = 'mountains';
    const LANDSCAPE_PEAK = 'peak';

    const RESOURCE_COPPER = 'Copper';
    const RESOURCE_TIN = 'Tin';
    const RESOURCE_HORSE = 'Horse';
    const RESOURCE_IRON = 'Iron';
    const RESOURCE_COAL = 'Coal';
    const RESOURCE_OIL = 'Oil';
    const RESOURCE_GAS = 'Gas';
    const RESOURCE_ALUMINUM = 'Aluminum';
    const RESOURCE_URANIUM = 'Uranium';
    const RESOURCE_GAME = 'Game';
    const RESOURCE_COWS = 'Cows';
    const RESOURCE_SHEEP = 'Sheep';
    const RESOURCE_PIGS = 'Pigs';
    const RESOURCE_WHEAT = 'Wheat';
    const RESOURCE_RICE = 'Rice';
    const RESOURCE_OAT = 'Oat';
    const RESOURCE_RYE = 'Rye';
    const RESOURCE_MAIZE = 'Maize';
    const RESOURCE_QUINOA = 'Quinoa';
    const RESOURCE_POTATO = 'Potato';
    const RESOURCE_FISH = 'Fish';
    const RESOURCE_SHELLFISH = 'Shellfish';
    const RESOURCE_SILVER = 'Silver';
    const RESOURCE_GOLD = 'Gold';
    const RESOURCE_DIAMONDS = 'Diamonds';
    const RESOURCE_MARBLE = 'Marble';
    const RESOURCE_PEARLS = 'Pearls';
    const RESOURCE_INCENSE = 'Incense';
    const RESOURCE_WHALE = 'Whale';
    const RESOURCE_COTTON = 'Cotton';
    const RESOURCE_SUGAR = 'Sugar';
    const RESOURCE_TOBACCO = 'Tobacco';
    const RESOURCE_SILK = 'Silk';
    const RESOURCE_SPICES = 'Spices';
    const RESOURCE_TEA = 'Tea';
    const RESOURCE_COFFEE = 'Coffee';
    const RESOURCE_JADE = 'Jade';
    const RESOURCE_IVORY = 'Ivory';
    const RESOURCE_SEAL = 'Seal';
    const RESOURCE_FUR = 'Fur';
    const RESOURCE_BRONZE = 'Bronze';
    const RESOURCE_STEEL = 'Steel';
    const RESOURCE_ELECTRICITY = 'Electricity';
    const RESOURCE_GASOLINE = 'Gasoline';
    const RESOURCE_FERTILIZER = 'Fertilizer';
    const RESOURCE_MEDICINE = 'Medicine';
    const RESOURCE_PROCESSED_FOOD = 'Processed Food';

    const TECH_AGRICULTURE = 'Agriculture';
    const TECH_SAILING = 'Sailing';
    const TECH_MYSTICISM = 'Mysticism';
    const TECH_POTTERY = 'Pottery';
    const TECH_STONE_WORKING = 'Stone Working';
    const TECH_ASTROLOGY = 'Astrology';
    const TECH_COPPER_WORKING = 'Copper Working';
    const TECH_CENTRAL_GOVERNANCE = 'Central Governance';
    const TECH_MINING = 'Mining';
    const TECH_ARCHERY = 'Archery';
    const TECH_WRITING = 'Writing';
    const TECH_BRONZE_WORKING = 'Bronze Working';
    const TECH_ANIMAL_HUSBANDRY = 'Animal Husbandry';
    const TECH_CELESTIAL_NAVIGATION = 'Celestial Navigation';
    const TECH_CALENDAR = 'Calendar';
    const TECH_MASONRY = 'Masonry';
    const TECH_WHEEL = 'Wheel';
    const TECH_ARTISANSHIP = 'Artisanship';
    const TECH_IRRIGATION = 'Irrigation';
    const TECH_ORGANIZED_RELIGION = 'Organized Religion';
    const TECH_CODE_OF_LAW = 'Code of Law';
    const TECH_CURRENCY = 'Currency';
    const TECH_ALPHABET = 'Alphabet';
    const TECH_IRON_WORKING = 'Iron Working';
    const TECH_HORSEBACK_RIDING = 'Horseback Riding';
    const TECH_SHIP_BUILDING = 'Ship Building';
    const TECH_MATHEMATICS = 'Mathematics';
    const TECH_CONSTRUCTION = 'Construction';
    const TECH_BUREAUCRACY = 'Bureaucracy';
    const TECH_SCULPTING = 'Sculpting';
    const TECH_SPORTS = 'Sports';
    const TECH_PHILOSOPHY = 'Philosophy';
    const TECH_ENGINEERING = 'Engineering';
    const TECH_DRAMA = 'Drama';
    const TECH_MILITARY_DISCIPLINE = 'Military Discipline';
    const TECH_ARCH_BUILDING = 'Arch Building';
    const TECH_COMPOSITE_BOW = 'Composite Bow';
    const TECH_PROFESSIONAL_ARMY = 'Professional Army';
    const TECH_GLASSBLOWING = 'Glassblowing';
    const TECH_TREADWHEEL_CRANE = 'Treadwheel Crane';
    const TECH_STATE_RELIGION = 'State Religion';
    const TECH_PAPER = 'Paper';
    const TECH_THEOLOGY = 'Theology';
    const TECH_STIRRUPS = 'Stirrups';
    const TECH_CHAINMAIL = 'Chainmail';
    const TECH_CIVIL_SERVICE = 'Civil Service';
    const TECH_APPRENTICESHIP = 'Apprenticeship';
    const TECH_DIVINE_RIGHT = 'Divine Right';
    const TECH_METAL_CASTING = 'Metal Casting';
    const TECH_CROP_ROTATION = 'Crop Rotation';
    const TECH_FEUDALISM = 'Feudalism';
    const TECH_MILITARY_TACTICS = 'Military Tactics';
    const TECH_STEEL = 'Steel';
    const TECH_GUILDS = 'Guilds';
    const TECH_CASTLES = 'Castles';
    const TECH_MACHINERY = 'Machinery';
    const TECH_CHIVALRY = 'Chivalry';
    const TECH_SIEGE_TACTICS = 'Siege Tactics';
    const TECH_COMPASS = 'Compass';
    const TECH_BOOKBINDING = 'Bookbinding';
    const TECH_WEAVING_MACHINES = 'Weaving Machines';
    const TECH_OPTICS = 'Optics';
    const TECH_GUNPOWDER = 'Gunpowder';
    const TECH_BANKING = 'Banking';
    const TECH_MASS_PRODUCTION = 'Mass Production';
    const TECH_PERSPECTIVE = 'Perspective';
    const TECH_ARCHITECTURE = 'Architecture';
    const TECH_MILITARY_ENGINEERING = 'Military Engineering';
    const TECH_INVENTION = 'Invention';
    const TECH_CARTOGRAPHY = 'Cartography';
    const TECH_SQUARE_RIGGING = 'Square Rigging';
    const TECH_PRINTING = 'Printing';
    const TECH_ASTRONOMY = 'Astronomy';
    const TECH_EDUCATION = 'Education';
    const TECH_MERCANTILISM = 'Mercantilism';
    const TECH_COLONIZATION = 'Colonization';
    const TECH_ECONOMICS = 'Economics';
    const TECH_CHEMISTRY = 'Chemistry';
    const TECH_THEATER = 'Theater';
    const TECH_NAVIGATION = 'Navigation';
    const TECH_METALLURGY = 'Metallurgy';
    const TECH_ROYAL_CHARTER = 'Royal Charter';
    const TECH_CORPORATION = 'Corporation';
    const TECH_LIBERALISM = 'Liberalism';
    const TECH_DIPLOMACY = 'Diplomacy';
    const TECH_SCIENTIFIC_THEORY = 'Scientific Theory';
    const TECH_CONSTITUTION = 'Constitution';
    const TECH_NATIONALISM = 'Nationalism';
    const TECH_VACCINES = 'Vaccines';
    const TECH_STEAM_POWER = 'Steam Power';
    const TECH_CONSCRIPTION = 'Conscription';
    const TECH_RIFLING = 'Rifling';
    const TECH_INDUSTRIALIZATION = 'Industrialization';
    const TECH_ARCHEOLOGY = 'Archeology';
    const TECH_MILITARY_SCIENCE = 'Military Science';
    const TECH_RAILROAD = 'Railroad';
    const TECH_COAL_GASIFICATION = 'Coal Gasification';
    const TECH_TELEGRAPH = 'Telegraph';
    const TECH_FERTILIZER = 'Fertilizer';
    const TECH_NITROGLYCERIN = 'Nitroglycerin';
    const TECH_BIOLOGY = 'Biology';
    const TECH_HAUTE_COUTURE = 'Haute Couture';
    const TECH_STEEL_MILLING = 'Steel Milling';
    const TECH_SANITIZATION = 'Sanitization';
    const TECH_ELECTRICITY = 'Electricity';
    const TECH_SOCIALISM = 'Socialism';
    const TECH_SMOKELESS_POWDER = 'Smokeless Powder';
    const TECH_COMBUSTION = 'Combustion';
    const TECH_RADIO = 'Radio';
    const TECH_CENTRAL_BANKING = 'Central Banking';
    const TECH_DYNAMITE = 'Dynamite';
    const TECH_FLIGHT = 'Flight';
    const TECH_BALLISTICS = 'Ballistics';
    const TECH_REPLACEABLE_PARTS = 'Replaceable Parts';
    const TECH_REFRIGERATION = 'Refrigeration';
    const TECH_ART_DECO = 'Art Deco';
    const TECH_ASSAULT_TACTICS = 'Assault Tactics';
    const TECH_ASSEMBLY_LINE = 'Assembly Line';
    const TECH_PENICILLIN = 'Penicillin';
    const TECH_MILITARISM = 'Militarism';
    const TECH_HYDRAULIC_ENGINEERING = 'Hydraulic Engineering';
    const TECH_ELECTRONICS = 'Electronics';
    const TECH_ATOMIC_THEORY = 'Atomic Theory';
    const TECH_ROCKETRY = 'Rocketry';
    const TECH_METAL_ALLOYS = 'Metal Alloys';
    const TECH_RADAR = 'Radar';
    const TECH_JET_ENGINE = 'Jet Engine';
    const TECH_SYNTHETIC_MATERIALS = 'Synthetic Materials';
    const TECH_COMBINED_ARMS = 'Combined Arms';
    const TECH_PLASTICS = 'Plastics';
    const TECH_NUCLEAR_FISSION = 'Nuclear Fission';
    const TECH_TRANSISTOR = 'Transistor';
    const TECH_MACROECONOMICS = 'Macroeconomics';
    const TECH_ADVANCED_BALLISTICS = 'Advanced Ballistics';
    const TECH_COMPUTERS = 'Computers';
    const TECH_ECOLOGY = 'Ecology';
    const TECH_TELECOMMUNICATIONS = 'Telecommunications';
    const TECH_SATELLITES = 'Satellites';
    const TECH_ENVIRONMENTALISM = 'Environmentalism';
    const TECH_ROBOTICS = 'Robotics';
    const TECH_GUIDANCE_SYSTEMS = 'Guidance Systems';
    const TECH_COMPOSITES = 'Composites';
    const TECH_MICROCHIPS = 'Microchips';
    const TECH_LASERS = 'Lasers';
    const TECH_GLOBALIZATION = 'Globalization';
    const TECH_INTERNET = 'Internet';
    const TECH_GENETICS = 'Genetics';
    const TECH_STEALTH = 'Stealth';
    const TECH_FIBER_OPTICS = 'Fiber Optics';
    const TECH_PARTICLE_PHYSICS = 'Particle Physics';
    const TECH_BIOTECHNOLOGY = 'Biotechnology';
    const TECH_SUPERCONDUCTORS = 'Superconductors';
    const TECH_CROWDSOURCING = 'Crowdsourcing';
    const TECH_MASS_SURVEILLANCE = 'Mass Surveillance';
    const TECH_QUANTUM_PHYSICS = 'Quantum Physics';
    const TECH_NANOTECHNOLOGY = 'Nanotechnology';
    const TECH_PRIVATE_SPACE_FLIGHT = 'Private Space Flight';
    const TECH_BIOSYNTHETICS = 'Biosynthetics';
    const TECH_QUANTUM_COMPUTING = 'Quantum Computing';
    const TECH_CYBERNETICS = 'Cybernetics';
    const TECH_WEAPONIZED_LASERS = 'Weaponized Lasers';
    const TECH_ARTIFICIAL_INTELLIGENCE = 'Artificial Intelligence';
    const TECH_CRYOGENICS = 'Cryogenics';
    const TECH_NUCLEAR_FUSION = 'Nuclear Fusion';
    const TECH_NEURAL_NETWORKS = 'Neural Networks';
    const TECH_RAILGUNS = 'Railguns';
    const TECH_FUSION_PROPULSION = 'Fusion Propulsion';
    const TECH_NANOBOTS = 'Nanobots';
    const TECH_CLONING = 'Cloning';
    const TECH_FUTURE_TECH = 'Future Tech';

    const TERRAIN_GRASS = 'grass';
    const TERRAIN_TROPICAL_GRASS = 'tropicalGrass';
    const TERRAIN_TUNDRA = 'tundra';
    const TERRAIN_PLAINS = 'plains';
    const TERRAIN_STEPPE = 'steppe';
    const TERRAIN_SAVANNA = 'savanna';
    const TERRAIN_ICE = 'ice';
    const TERRAIN_SHRUBLAND = 'shrubland';
    const TERRAIN_DESERT = 'desert';
    const TERRAIN_GREAT_RIVER = 'greatRiver';
    const TERRAIN_LAKE = 'lake';
    const TERRAIN_COAST = 'coast';
    const TERRAIN_OCEAN = 'ocean';

    const TERRAIN_TYPE_GRASS = 'grass';
    const TERRAIN_TYPE_PLAINS = 'plains';
    const TERRAIN_TYPE_DESOLATE = 'desolate';
    const TERRAIN_TYPE_SALT_WATER = 'saltWater';
    const TERRAIN_TYPE_FRESH_WATER = 'freshWater';

    const UNIT_WORKER = 'Worker';
    const UNIT_BUILDER = 'Builder';
    const UNIT_PEASANT = 'Peasant';
    const UNIT_ENGINEER = 'Engineer';
    const UNIT_TRACTOR = 'Tractor';
    const UNIT_ROBOTICS_ENGINEER = 'Robotics Engineer';
    const UNIT_TRIBE = 'Tribe';
    const UNIT_SETTLER = 'Settler';
    const UNIT_COLONIST = 'Colonist';
    const UNIT_MIGRANT = 'Migrant';
    const UNIT_SCOUT = 'Scout';
    const UNIT_JAVELINMAN = 'Javelinman';
    const UNIT_HORSE_ARCHER = 'Horse Archer';
    const UNIT_CROSSBOWMAN = 'Crossbowman';
    const UNIT_HARQUEBUSIER = 'Harquebusier';
    const UNIT_LIGHT_INFANTRY = 'Light Infantry';
    const UNIT_ARMORED_CAR = 'Armored Car';
    const UNIT_LIGHT_TANK = 'Light Tank';
    const UNIT_WARRIOR = 'Warrior';
    const UNIT_AXEMAN = 'Axeman';
    const UNIT_SWORDMAN = 'Swordman';
    const UNIT_HEAVY_SWORDMAN = 'Heavy Swordman';
    const UNIT_MACEMAN = 'Maceman';
    const UNIT_LONGSWORDMAN = 'Longswordman';
    const UNIT_MAN_AT_ARMS = 'Man-at-Arms';
    const UNIT_ARQUEBUISIER = 'Arquebuisier';
    const UNIT_MUSKETMAN = 'Musketman';
    const UNIT_RIFLEMAN = 'Rifleman';
    const UNIT_INFANTRY = 'Infantry';
    const UNIT_MODERN_INFANTRY = 'Modern Infantry';
    const UNIT_MOBILE_INFANTRY = 'Mobile Infantry';
    const UNIT_SPEARMAN = 'Spearman';
    const UNIT_PHALANX = 'Phalanx';
    const UNIT_PIKEMAN = 'Pikeman';
    const UNIT_HALBERDIER = 'Halberdier';
    const UNIT_GRENADIER = 'Grenadier';
    const UNIT_ASSAULT_TROOP = 'Assault Troop';
    const UNIT_MECHANIZED_INFANTRY = 'Mechanized Infantry';
    const UNIT_SLINGER = 'Slinger';
    const UNIT_BOWMAN = 'Bowman';
    const UNIT_ARCHER = 'Archer';
    const UNIT_LONGBOWMAN = 'Longbowman';
    const UNIT_CHARIOT = 'Chariot';
    const UNIT_HORSEMAN = 'Horseman';
    const UNIT_CATAPHRACT = 'Cataphract';
    const UNIT_KNIGHT = 'Knight';
    const UNIT_LANCER = 'Lancer';
    const UNIT_CAVALRY = 'Cavalry';
    const UNIT_LANDSHIP = 'Landship';
    const UNIT_TANK = 'Tank';
    const UNIT_MODERN_TANK = 'Modern Tank';
    const UNIT_MAIN_BATTLE_TANK = 'Main Battle Tank';
    const UNIT_BATTERING_RAM = 'Battering Ram';
    const UNIT_CATAPULT = 'Catapult';
    const UNIT_TREBUCHET = 'Trebuchet';
    const UNIT_MORTAR = 'Mortar';
    const UNIT_CANNON = 'Cannon';
    const UNIT_ARTILLERY = 'Artillery';
    const UNIT_FIELD_ARTILLERY = 'Field Artillery';
    const UNIT_ROCKET_ARTILLERY = 'Rocket Artillery';
    const UNIT_RAFT = 'Raft';
    const UNIT_GALLEY = 'Galley';
    const UNIT_BIREME = 'Bireme';
    const UNIT_COG = 'Cog';
    const UNIT_CARAVEL = 'Caravel';
    const UNIT_FRIGATE = 'Frigate';
    const UNIT_BRIG = 'Brig';
    const UNIT_DESTROYER = 'Destroyer';
    const UNIT_CORVETTE = 'Corvette';
    const UNIT_STEALTH_CORVETTE = 'Stealth Corvette';
    const UNIT_TRIREME = 'Trireme';
    const UNIT_GALLEASS = 'Galleass';
    const UNIT_GALLEON = 'Galleon';
    const UNIT_SHIP_OF_THE_LINE = 'Ship-of-the-Line';
    const UNIT_ARMORED_FRIGATE = 'Armored Frigate';
    const UNIT_DREADNOUGHT = 'Dreadnought';
    const UNIT_BATTLESHIP = 'Battleship';
    const UNIT_IRONCLAD = 'Ironclad';
    const UNIT_CARRIER = 'Carrier';
    const UNIT_NUCLEAR_CARRIER = 'Nuclear Carrier';
    const UNIT_PRIVATEER = 'Privateer';
    const UNIT_SUBMARINE = 'Submarine';
    const UNIT_HEAVY_SUBMARINE = 'Heavy Submarine';
    const UNIT_NUCLEAR_SUBMARINE = 'Nuclear Submarine';
    const UNIT_BIPLANE = 'Biplane';
    const UNIT_FIGHTER = 'Fighter';
    const UNIT_FIGHTER_BOMBER = 'Fighter-Bomber';
    const UNIT_JET_FIGHTER = 'Jet Fighter';
    const UNIT_STRIKE_FIGHTER = 'Strike Fighter';
    const UNIT_STEALTH_FIGHTER = 'Stealth Fighter';
    const UNIT_AIRSHIP = 'Airship';
    const UNIT_BOMBER = 'Bomber';
    const UNIT_JET_BOMBER = 'Jet Bomber';
    const UNIT_HYPERSONIC_BOMBER = 'Hypersonic Bomber';
    const UNIT_STEALTH_BOMBER = 'Stealth Bomber';
    const UNIT_ATOMIC_BOMB = 'Atomic Bomb';
    const UNIT_HYDROGEN_BOMB = 'Hydrogen Bomb';
    const UNIT_MISSILE = 'Missile';
    const UNIT_CRUISE_MISSILE = 'Cruise Missile';
    const UNIT_TACTICAL_NUKE = 'Tactical Nuke';
    const UNIT_ICBM = 'ICBM';
}
