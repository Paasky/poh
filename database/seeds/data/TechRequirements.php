<?php

namespace database\seeds\data;
use App\Models\PohModel;
use App\Models\Types\Technology;
use App\Models\Types\TechnologyRequirement;

class TechRequirements extends PohSeeder
{
    public $model = TechnologyRequirement::class;

    public function preProcessData(): void
    {
        foreach ($this->data as $i => $row) {
            $this->data[$i]['required'] = Technology::where('model', $row['required'])->firstOrFail()->id;
            $this->data[$i]['for'] = Technology::where('model', $row['for'])->firstOrFail()->id;
        }
    }

    public $data = [
        [
            'required' => PohModel::TECH_AGRICULTURE,
            'for' => PohModel::TECH_SAILING,
        ],
        [
            'required' => PohModel::TECH_AGRICULTURE,
            'for' => PohModel::TECH_MYSTICISM,
        ],
        [
            'required' => PohModel::TECH_AGRICULTURE,
            'for' => PohModel::TECH_POTTERY,
        ],
        [
            'required' => PohModel::TECH_AGRICULTURE,
            'for' => PohModel::TECH_STONE_WORKING,
        ],
        [
            'required' => PohModel::TECH_MYSTICISM,
            'for' => PohModel::TECH_ASTROLOGY,
        ],
        [
            'required' => PohModel::TECH_POTTERY,
            'for' => PohModel::TECH_COPPER_WORKING,
        ],
        [
            'required' => PohModel::TECH_STONE_WORKING,
            'for' => PohModel::TECH_COPPER_WORKING,
        ],
        [
            'required' => PohModel::TECH_ASTROLOGY,
            'for' => PohModel::TECH_CENTRAL_GOVERNANCE,
        ],
        [
            'required' => PohModel::TECH_COPPER_WORKING,
            'for' => PohModel::TECH_CENTRAL_GOVERNANCE,
        ],
        [
            'required' => PohModel::TECH_COPPER_WORKING,
            'for' => PohModel::TECH_MINING,
        ],
        [
            'required' => PohModel::TECH_COPPER_WORKING,
            'for' => PohModel::TECH_ARCHERY,
        ],
        [
            'required' => PohModel::TECH_CENTRAL_GOVERNANCE,
            'for' => PohModel::TECH_WRITING,
        ],
        [
            'required' => PohModel::TECH_CENTRAL_GOVERNANCE,
            'for' => PohModel::TECH_BRONZE_WORKING,
        ],
        [
            'required' => PohModel::TECH_MINING,
            'for' => PohModel::TECH_BRONZE_WORKING,
        ],
        [
            'required' => PohModel::TECH_ARCHERY,
            'for' => PohModel::TECH_ANIMAL_HUSBANDRY,
        ],
        [
            'required' => PohModel::TECH_SAILING,
            'for' => PohModel::TECH_CELESTIAL_NAVIGATION,
        ],
        [
            'required' => PohModel::TECH_WRITING,
            'for' => PohModel::TECH_CELESTIAL_NAVIGATION,
        ],
        [
            'required' => PohModel::TECH_WRITING,
            'for' => PohModel::TECH_CALENDAR,
        ],
        [
            'required' => PohModel::TECH_BRONZE_WORKING,
            'for' => PohModel::TECH_CALENDAR,
        ],
        [
            'required' => PohModel::TECH_BRONZE_WORKING,
            'for' => PohModel::TECH_MASONRY,
        ],
        [
            'required' => PohModel::TECH_BRONZE_WORKING,
            'for' => PohModel::TECH_WHEEL,
        ],
        [
            'required' => PohModel::TECH_ANIMAL_HUSBANDRY,
            'for' => PohModel::TECH_WHEEL,
        ],
        [
            'required' => PohModel::TECH_CELESTIAL_NAVIGATION,
            'for' => PohModel::TECH_ARTISANSHIP,
        ],
        [
            'required' => PohModel::TECH_CALENDAR,
            'for' => PohModel::TECH_ARTISANSHIP,
        ],
        [
            'required' => PohModel::TECH_MASONRY,
            'for' => PohModel::TECH_ARTISANSHIP,
        ],
        [
            'required' => PohModel::TECH_MASONRY,
            'for' => PohModel::TECH_IRRIGATION,
        ],
        [
            'required' => PohModel::TECH_WHEEL,
            'for' => PohModel::TECH_IRRIGATION,
        ],
        [
            'required' => PohModel::TECH_ARTISANSHIP,
            'for' => PohModel::TECH_ORGANIZED_RELIGION,
        ],
        [
            'required' => PohModel::TECH_ARTISANSHIP,
            'for' => PohModel::TECH_CODE_OF_LAW,
        ],
        [
            'required' => PohModel::TECH_IRRIGATION,
            'for' => PohModel::TECH_CURRENCY,
        ],
        [
            'required' => PohModel::TECH_ORGANIZED_RELIGION,
            'for' => PohModel::TECH_ALPHABET,
        ],
        [
            'required' => PohModel::TECH_CODE_OF_LAW,
            'for' => PohModel::TECH_ALPHABET,
        ],
        [
            'required' => PohModel::TECH_CODE_OF_LAW,
            'for' => PohModel::TECH_IRON_WORKING,
        ],
        [
            'required' => PohModel::TECH_CURRENCY,
            'for' => PohModel::TECH_IRON_WORKING,
        ],
        [
            'required' => PohModel::TECH_CURRENCY,
            'for' => PohModel::TECH_HORSEBACK_RIDING,
        ],
        [
            'required' => PohModel::TECH_ALPHABET,
            'for' => PohModel::TECH_SHIP_BUILDING,
        ],
        [
            'required' => PohModel::TECH_ALPHABET,
            'for' => PohModel::TECH_MATHEMATICS,
        ],
        [
            'required' => PohModel::TECH_IRON_WORKING,
            'for' => PohModel::TECH_MATHEMATICS,
        ],
        [
            'required' => PohModel::TECH_IRON_WORKING,
            'for' => PohModel::TECH_CONSTRUCTION,
        ],
        [
            'required' => PohModel::TECH_SHIP_BUILDING,
            'for' => PohModel::TECH_BUREAUCRACY,
        ],
        [
            'required' => PohModel::TECH_MATHEMATICS,
            'for' => PohModel::TECH_BUREAUCRACY,
        ],
        [
            'required' => PohModel::TECH_MATHEMATICS,
            'for' => PohModel::TECH_SCULPTING,
        ],
        [
            'required' => PohModel::TECH_CONSTRUCTION,
            'for' => PohModel::TECH_SCULPTING,
        ],
        [
            'required' => PohModel::TECH_CONSTRUCTION,
            'for' => PohModel::TECH_SPORTS,
        ],
        [
            'required' => PohModel::TECH_HORSEBACK_RIDING,
            'for' => PohModel::TECH_SPORTS,
        ],
        [
            'required' => PohModel::TECH_BUREAUCRACY,
            'for' => PohModel::TECH_PHILOSOPHY,
        ],
        [
            'required' => PohModel::TECH_BUREAUCRACY,
            'for' => PohModel::TECH_ENGINEERING,
        ],
        [
            'required' => PohModel::TECH_SCULPTING,
            'for' => PohModel::TECH_ENGINEERING,
        ],
        [
            'required' => PohModel::TECH_SPORTS,
            'for' => PohModel::TECH_DRAMA,
        ],
        [
            'required' => PohModel::TECH_SPORTS,
            'for' => PohModel::TECH_MILITARY_DISCIPLINE,
        ],
        [
            'required' => PohModel::TECH_ENGINEERING,
            'for' => PohModel::TECH_ARCH_BUILDING,
        ],
        [
            'required' => PohModel::TECH_ENGINEERING,
            'for' => PohModel::TECH_COMPOSITE_BOW,
        ],
        [
            'required' => PohModel::TECH_DRAMA,
            'for' => PohModel::TECH_COMPOSITE_BOW,
        ],
        [
            'required' => PohModel::TECH_DRAMA,
            'for' => PohModel::TECH_PROFESSIONAL_ARMY,
        ],
        [
            'required' => PohModel::TECH_MILITARY_DISCIPLINE,
            'for' => PohModel::TECH_PROFESSIONAL_ARMY,
        ],
        [
            'required' => PohModel::TECH_PHILOSOPHY,
            'for' => PohModel::TECH_GLASSBLOWING,
        ],
        [
            'required' => PohModel::TECH_ARCH_BUILDING,
            'for' => PohModel::TECH_GLASSBLOWING,
        ],
        [
            'required' => PohModel::TECH_ARCH_BUILDING,
            'for' => PohModel::TECH_TREADWHEEL_CRANE,
        ],
        [
            'required' => PohModel::TECH_COMPOSITE_BOW,
            'for' => PohModel::TECH_TREADWHEEL_CRANE,
        ],
        [
            'required' => PohModel::TECH_GLASSBLOWING,
            'for' => PohModel::TECH_STATE_RELIGION,
        ],
        [
            'required' => PohModel::TECH_TREADWHEEL_CRANE,
            'for' => PohModel::TECH_STATE_RELIGION,
        ],
        [
            'required' => PohModel::TECH_TREADWHEEL_CRANE,
            'for' => PohModel::TECH_PAPER,
        ],
        [
            'required' => PohModel::TECH_COMPOSITE_BOW,
            'for' => PohModel::TECH_PAPER,
        ],
        [
            'required' => PohModel::TECH_PROFESSIONAL_ARMY,
            'for' => PohModel::TECH_PAPER,
        ],
        [
            'required' => PohModel::TECH_STATE_RELIGION,
            'for' => PohModel::TECH_THEOLOGY,
        ],
        [
            'required' => PohModel::TECH_PAPER,
            'for' => PohModel::TECH_THEOLOGY,
        ],
        [
            'required' => PohModel::TECH_PAPER,
            'for' => PohModel::TECH_STIRRUPS,
        ],
        [
            'required' => PohModel::TECH_PAPER,
            'for' => PohModel::TECH_CHAINMAIL,
        ],
        [
            'required' => PohModel::TECH_THEOLOGY,
            'for' => PohModel::TECH_CIVIL_SERVICE,
        ],
        [
            'required' => PohModel::TECH_STIRRUPS,
            'for' => PohModel::TECH_CIVIL_SERVICE,
        ],
        [
            'required' => PohModel::TECH_CHAINMAIL,
            'for' => PohModel::TECH_CIVIL_SERVICE,
        ],
        [
            'required' => PohModel::TECH_CHAINMAIL,
            'for' => PohModel::TECH_APPRENTICESHIP,
        ],
        [
            'required' => PohModel::TECH_CIVIL_SERVICE,
            'for' => PohModel::TECH_DIVINE_RIGHT,
        ],
        [
            'required' => PohModel::TECH_CIVIL_SERVICE,
            'for' => PohModel::TECH_METAL_CASTING,
        ],
        [
            'required' => PohModel::TECH_CIVIL_SERVICE,
            'for' => PohModel::TECH_CROP_ROTATION,
        ],
        [
            'required' => PohModel::TECH_APPRENTICESHIP,
            'for' => PohModel::TECH_CROP_ROTATION,
        ],
        [
            'required' => PohModel::TECH_DIVINE_RIGHT,
            'for' => PohModel::TECH_FEUDALISM,
        ],
        [
            'required' => PohModel::TECH_METAL_CASTING,
            'for' => PohModel::TECH_FEUDALISM,
        ],
        [
            'required' => PohModel::TECH_METAL_CASTING,
            'for' => PohModel::TECH_MILITARY_TACTICS,
        ],
        [
            'required' => PohModel::TECH_METAL_CASTING,
            'for' => PohModel::TECH_STEEL,
        ],
        [
            'required' => PohModel::TECH_CROP_ROTATION,
            'for' => PohModel::TECH_STEEL,
        ],
        [
            'required' => PohModel::TECH_CROP_ROTATION,
            'for' => PohModel::TECH_GUILDS,
        ],
        [
            'required' => PohModel::TECH_FEUDALISM,
            'for' => PohModel::TECH_CASTLES,
        ],
        [
            'required' => PohModel::TECH_MILITARY_TACTICS,
            'for' => PohModel::TECH_CASTLES,
        ],
        [
            'required' => PohModel::TECH_STEEL,
            'for' => PohModel::TECH_CASTLES,
        ],
        [
            'required' => PohModel::TECH_STEEL,
            'for' => PohModel::TECH_MACHINERY,
        ],
        [
            'required' => PohModel::TECH_GUILDS,
            'for' => PohModel::TECH_MACHINERY,
        ],
        [
            'required' => PohModel::TECH_CASTLES,
            'for' => PohModel::TECH_CHIVALRY,
        ],
        [
            'required' => PohModel::TECH_CASTLES,
            'for' => PohModel::TECH_SIEGE_TACTICS,
        ],
        [
            'required' => PohModel::TECH_MACHINERY,
            'for' => PohModel::TECH_SIEGE_TACTICS,
        ],
        [
            'required' => PohModel::TECH_MACHINERY,
            'for' => PohModel::TECH_COMPASS,
        ],
        [
            'required' => PohModel::TECH_CHIVALRY,
            'for' => PohModel::TECH_BOOKBINDING,
        ],
        [
            'required' => PohModel::TECH_SIEGE_TACTICS,
            'for' => PohModel::TECH_BOOKBINDING,
        ],
        [
            'required' => PohModel::TECH_COMPASS,
            'for' => PohModel::TECH_WEAVING_MACHINES,
        ],
        [
            'required' => PohModel::TECH_COMPASS,
            'for' => PohModel::TECH_OPTICS,
        ],
        [
            'required' => PohModel::TECH_BOOKBINDING,
            'for' => PohModel::TECH_GUNPOWDER,
        ],
        [
            'required' => PohModel::TECH_BOOKBINDING,
            'for' => PohModel::TECH_BANKING,
        ],
        [
            'required' => PohModel::TECH_WEAVING_MACHINES,
            'for' => PohModel::TECH_BANKING,
        ],
        [
            'required' => PohModel::TECH_WEAVING_MACHINES,
            'for' => PohModel::TECH_MASS_PRODUCTION,
        ],
        [
            'required' => PohModel::TECH_OPTICS,
            'for' => PohModel::TECH_MASS_PRODUCTION,
        ],
        [
            'required' => PohModel::TECH_GUNPOWDER,
            'for' => PohModel::TECH_PERSPECTIVE,
        ],
        [
            'required' => PohModel::TECH_BANKING,
            'for' => PohModel::TECH_PERSPECTIVE,
        ],
        [
            'required' => PohModel::TECH_BANKING,
            'for' => PohModel::TECH_ARCHITECTURE,
        ],
        [
            'required' => PohModel::TECH_MASS_PRODUCTION,
            'for' => PohModel::TECH_ARCHITECTURE,
        ],
        [
            'required' => PohModel::TECH_MASS_PRODUCTION,
            'for' => PohModel::TECH_MILITARY_ENGINEERING,
        ],
        [
            'required' => PohModel::TECH_PERSPECTIVE,
            'for' => PohModel::TECH_INVENTION,
        ],
        [
            'required' => PohModel::TECH_PERSPECTIVE,
            'for' => PohModel::TECH_CARTOGRAPHY,
        ],
        [
            'required' => PohModel::TECH_ARCHITECTURE,
            'for' => PohModel::TECH_CARTOGRAPHY,
        ],
        [
            'required' => PohModel::TECH_ARCHITECTURE,
            'for' => PohModel::TECH_SQUARE_RIGGING,
        ],
        [
            'required' => PohModel::TECH_MILITARY_ENGINEERING,
            'for' => PohModel::TECH_SQUARE_RIGGING,
        ],
        [
            'required' => PohModel::TECH_INVENTION,
            'for' => PohModel::TECH_PRINTING,
        ],
        [
            'required' => PohModel::TECH_CARTOGRAPHY,
            'for' => PohModel::TECH_PRINTING,
        ],
        [
            'required' => PohModel::TECH_CARTOGRAPHY,
            'for' => PohModel::TECH_ASTRONOMY,
        ],
        [
            'required' => PohModel::TECH_SQUARE_RIGGING,
            'for' => PohModel::TECH_ASTRONOMY,
        ],
        [
            'required' => PohModel::TECH_PRINTING,
            'for' => PohModel::TECH_EDUCATION,
        ],
        [
            'required' => PohModel::TECH_PRINTING,
            'for' => PohModel::TECH_MERCANTILISM,
        ],
        [
            'required' => PohModel::TECH_ASTRONOMY,
            'for' => PohModel::TECH_MERCANTILISM,
        ],
        [
            'required' => PohModel::TECH_ASTRONOMY,
            'for' => PohModel::TECH_COLONIZATION,
        ],
        [
            'required' => PohModel::TECH_EDUCATION,
            'for' => PohModel::TECH_ECONOMICS,
        ],
        [
            'required' => PohModel::TECH_EDUCATION,
            'for' => PohModel::TECH_CHEMISTRY,
        ],
        [
            'required' => PohModel::TECH_MERCANTILISM,
            'for' => PohModel::TECH_CHEMISTRY,
        ],
        [
            'required' => PohModel::TECH_MERCANTILISM,
            'for' => PohModel::TECH_THEATER,
        ],
        [
            'required' => PohModel::TECH_COLONIZATION,
            'for' => PohModel::TECH_THEATER,
        ],
        [
            'required' => PohModel::TECH_ECONOMICS,
            'for' => PohModel::TECH_NAVIGATION,
        ],
        [
            'required' => PohModel::TECH_CHEMISTRY,
            'for' => PohModel::TECH_NAVIGATION,
        ],
        [
            'required' => PohModel::TECH_CHEMISTRY,
            'for' => PohModel::TECH_METALLURGY,
        ],
        [
            'required' => PohModel::TECH_NAVIGATION,
            'for' => PohModel::TECH_ROYAL_CHARTER,
        ],
        [
            'required' => PohModel::TECH_NAVIGATION,
            'for' => PohModel::TECH_CORPORATION,
        ],
        [
            'required' => PohModel::TECH_METALLURGY,
            'for' => PohModel::TECH_CORPORATION,
        ],
        [
            'required' => PohModel::TECH_METALLURGY,
            'for' => PohModel::TECH_LIBERALISM,
        ],
        [
            'required' => PohModel::TECH_ECONOMICS,
            'for' => PohModel::TECH_LIBERALISM,
        ],
        [
            'required' => PohModel::TECH_ROYAL_CHARTER,
            'for' => PohModel::TECH_DIPLOMACY,
        ],
        [
            'required' => PohModel::TECH_CORPORATION,
            'for' => PohModel::TECH_DIPLOMACY,
        ],
        [
            'required' => PohModel::TECH_CORPORATION,
            'for' => PohModel::TECH_SCIENTIFIC_THEORY,
        ],
        [
            'required' => PohModel::TECH_LIBERALISM,
            'for' => PohModel::TECH_SCIENTIFIC_THEORY,
        ],
        [
            'required' => PohModel::TECH_LIBERALISM,
            'for' => PohModel::TECH_CONSTITUTION,
        ],
        [
            'required' => PohModel::TECH_DIPLOMACY,
            'for' => PohModel::TECH_NATIONALISM,
        ],
        [
            'required' => PohModel::TECH_DIPLOMACY,
            'for' => PohModel::TECH_VACCINES,
        ],
        [
            'required' => PohModel::TECH_SCIENTIFIC_THEORY,
            'for' => PohModel::TECH_VACCINES,
        ],
        [
            'required' => PohModel::TECH_SCIENTIFIC_THEORY,
            'for' => PohModel::TECH_STEAM_POWER,
        ],
        [
            'required' => PohModel::TECH_CONSTITUTION,
            'for' => PohModel::TECH_STEAM_POWER,
        ],
        [
            'required' => PohModel::TECH_NATIONALISM,
            'for' => PohModel::TECH_CONSCRIPTION,
        ],
        [
            'required' => PohModel::TECH_VACCINES,
            'for' => PohModel::TECH_CONSCRIPTION,
        ],
        [
            'required' => PohModel::TECH_VACCINES,
            'for' => PohModel::TECH_RIFLING,
        ],
        [
            'required' => PohModel::TECH_STEAM_POWER,
            'for' => PohModel::TECH_RIFLING,
        ],
        [
            'required' => PohModel::TECH_STEAM_POWER,
            'for' => PohModel::TECH_INDUSTRIALIZATION,
        ],
        [
            'required' => PohModel::TECH_CONSCRIPTION,
            'for' => PohModel::TECH_ARCHEOLOGY,
        ],
        [
            'required' => PohModel::TECH_CONSCRIPTION,
            'for' => PohModel::TECH_MILITARY_SCIENCE,
        ],
        [
            'required' => PohModel::TECH_RIFLING,
            'for' => PohModel::TECH_MILITARY_SCIENCE,
        ],
        [
            'required' => PohModel::TECH_RIFLING,
            'for' => PohModel::TECH_RAILROAD,
        ],
        [
            'required' => PohModel::TECH_INDUSTRIALIZATION,
            'for' => PohModel::TECH_RAILROAD,
        ],
        [
            'required' => PohModel::TECH_INDUSTRIALIZATION,
            'for' => PohModel::TECH_COAL_GASIFICATION,
        ],
        [
            'required' => PohModel::TECH_ARCHEOLOGY,
            'for' => PohModel::TECH_TELEGRAPH,
        ],
        [
            'required' => PohModel::TECH_MILITARY_SCIENCE,
            'for' => PohModel::TECH_TELEGRAPH,
        ],
        [
            'required' => PohModel::TECH_MILITARY_SCIENCE,
            'for' => PohModel::TECH_FERTILIZER,
        ],
        [
            'required' => PohModel::TECH_MILITARY_SCIENCE,
            'for' => PohModel::TECH_NITROGLYCERIN,
        ],
        [
            'required' => PohModel::TECH_RAILROAD,
            'for' => PohModel::TECH_NITROGLYCERIN,
        ],
        [
            'required' => PohModel::TECH_COAL_GASIFICATION,
            'for' => PohModel::TECH_NITROGLYCERIN,
        ],
        [
            'required' => PohModel::TECH_COAL_GASIFICATION,
            'for' => PohModel::TECH_BIOLOGY,
        ],
        [
            'required' => PohModel::TECH_TELEGRAPH,
            'for' => PohModel::TECH_HAUTE_COUTURE,
        ],
        [
            'required' => PohModel::TECH_FERTILIZER,
            'for' => PohModel::TECH_HAUTE_COUTURE,
        ],
        [
            'required' => PohModel::TECH_FERTILIZER,
            'for' => PohModel::TECH_STEEL_MILLING,
        ],
        [
            'required' => PohModel::TECH_NITROGLYCERIN,
            'for' => PohModel::TECH_STEEL_MILLING,
        ],
        [
            'required' => PohModel::TECH_BIOLOGY,
            'for' => PohModel::TECH_STEEL_MILLING,
        ],
        [
            'required' => PohModel::TECH_BIOLOGY,
            'for' => PohModel::TECH_SANITIZATION,
        ],
        [
            'required' => PohModel::TECH_HAUTE_COUTURE,
            'for' => PohModel::TECH_ELECTRICITY,
        ],
        [
            'required' => PohModel::TECH_HAUTE_COUTURE,
            'for' => PohModel::TECH_SOCIALISM,
        ],
        [
            'required' => PohModel::TECH_STEEL_MILLING,
            'for' => PohModel::TECH_SOCIALISM,
        ],
        [
            'required' => PohModel::TECH_STEEL_MILLING,
            'for' => PohModel::TECH_SMOKELESS_POWDER,
        ],
        [
            'required' => PohModel::TECH_SANITIZATION,
            'for' => PohModel::TECH_SMOKELESS_POWDER,
        ],
        [
            'required' => PohModel::TECH_ELECTRICITY,
            'for' => PohModel::TECH_COMBUSTION,
        ],
        [
            'required' => PohModel::TECH_ELECTRICITY,
            'for' => PohModel::TECH_RADIO,
        ],
        [
            'required' => PohModel::TECH_SOCIALISM,
            'for' => PohModel::TECH_RADIO,
        ],
        [
            'required' => PohModel::TECH_SOCIALISM,
            'for' => PohModel::TECH_CENTRAL_BANKING,
        ],
        [
            'required' => PohModel::TECH_SMOKELESS_POWDER,
            'for' => PohModel::TECH_CENTRAL_BANKING,
        ],
        [
            'required' => PohModel::TECH_SMOKELESS_POWDER,
            'for' => PohModel::TECH_DYNAMITE,
        ],
        [
            'required' => PohModel::TECH_COMBUSTION,
            'for' => PohModel::TECH_FLIGHT,
        ],
        [
            'required' => PohModel::TECH_RADIO,
            'for' => PohModel::TECH_FLIGHT,
        ],
        [
            'required' => PohModel::TECH_RADIO,
            'for' => PohModel::TECH_BALLISTICS,
        ],
        [
            'required' => PohModel::TECH_RADIO,
            'for' => PohModel::TECH_REPLACEABLE_PARTS,
        ],
        [
            'required' => PohModel::TECH_CENTRAL_BANKING,
            'for' => PohModel::TECH_REPLACEABLE_PARTS,
        ],
        [
            'required' => PohModel::TECH_DYNAMITE,
            'for' => PohModel::TECH_REPLACEABLE_PARTS,
        ],
        [
            'required' => PohModel::TECH_DYNAMITE,
            'for' => PohModel::TECH_REFRIGERATION,
        ],
        [
            'required' => PohModel::TECH_FLIGHT,
            'for' => PohModel::TECH_ART_DECO,
        ],
        [
            'required' => PohModel::TECH_FLIGHT,
            'for' => PohModel::TECH_ASSAULT_TACTICS,
        ],
        [
            'required' => PohModel::TECH_BALLISTICS,
            'for' => PohModel::TECH_ASSAULT_TACTICS,
        ],
        [
            'required' => PohModel::TECH_REPLACEABLE_PARTS,
            'for' => PohModel::TECH_ASSAULT_TACTICS,
        ],
        [
            'required' => PohModel::TECH_REPLACEABLE_PARTS,
            'for' => PohModel::TECH_ASSEMBLY_LINE,
        ],
        [
            'required' => PohModel::TECH_REPLACEABLE_PARTS,
            'for' => PohModel::TECH_PENICILLIN,
        ],
        [
            'required' => PohModel::TECH_REFRIGERATION,
            'for' => PohModel::TECH_PENICILLIN,
        ],
        [
            'required' => PohModel::TECH_ART_DECO,
            'for' => PohModel::TECH_MILITARISM,
        ],
        [
            'required' => PohModel::TECH_ASSAULT_TACTICS,
            'for' => PohModel::TECH_MILITARISM,
        ],
        [
            'required' => PohModel::TECH_ASSEMBLY_LINE,
            'for' => PohModel::TECH_HYDRAULIC_ENGINEERING,
        ],
        [
            'required' => PohModel::TECH_ASSAULT_TACTICS,
            'for' => PohModel::TECH_ELECTRONICS,
        ],
        [
            'required' => PohModel::TECH_ASSEMBLY_LINE,
            'for' => PohModel::TECH_ELECTRONICS,
        ],
        [
            'required' => PohModel::TECH_ASSEMBLY_LINE,
            'for' => PohModel::TECH_ATOMIC_THEORY,
        ],
        [
            'required' => PohModel::TECH_PENICILLIN,
            'for' => PohModel::TECH_ATOMIC_THEORY,
        ],
        [
            'required' => PohModel::TECH_MILITARISM,
            'for' => PohModel::TECH_ROCKETRY,
        ],
        [
            'required' => PohModel::TECH_HYDRAULIC_ENGINEERING,
            'for' => PohModel::TECH_ROCKETRY,
        ],
        [
            'required' => PohModel::TECH_HYDRAULIC_ENGINEERING,
            'for' => PohModel::TECH_METAL_ALLOYS,
        ],
        [
            'required' => PohModel::TECH_ELECTRONICS,
            'for' => PohModel::TECH_METAL_ALLOYS,
        ],
        [
            'required' => PohModel::TECH_ELECTRONICS,
            'for' => PohModel::TECH_RADAR,
        ],
        [
            'required' => PohModel::TECH_ATOMIC_THEORY,
            'for' => PohModel::TECH_RADAR,
        ],
        [
            'required' => PohModel::TECH_ROCKETRY,
            'for' => PohModel::TECH_JET_ENGINE,
        ],
        [
            'required' => PohModel::TECH_METAL_ALLOYS,
            'for' => PohModel::TECH_JET_ENGINE,
        ],
        [
            'required' => PohModel::TECH_METAL_ALLOYS,
            'for' => PohModel::TECH_SYNTHETIC_MATERIALS,
        ],
        [
            'required' => PohModel::TECH_METAL_ALLOYS,
            'for' => PohModel::TECH_COMBINED_ARMS,
        ],
        [
            'required' => PohModel::TECH_RADAR,
            'for' => PohModel::TECH_COMBINED_ARMS,
        ],
        [
            'required' => PohModel::TECH_JET_ENGINE,
            'for' => PohModel::TECH_PLASTICS,
        ],
        [
            'required' => PohModel::TECH_SYNTHETIC_MATERIALS,
            'for' => PohModel::TECH_PLASTICS,
        ],
        [
            'required' => PohModel::TECH_SYNTHETIC_MATERIALS,
            'for' => PohModel::TECH_NUCLEAR_FISSION,
        ],
        [
            'required' => PohModel::TECH_SYNTHETIC_MATERIALS,
            'for' => PohModel::TECH_TRANSISTOR,
        ],
        [
            'required' => PohModel::TECH_COMBINED_ARMS,
            'for' => PohModel::TECH_TRANSISTOR,
        ],
        [
            'required' => PohModel::TECH_PLASTICS,
            'for' => PohModel::TECH_MACROECONOMICS,
        ],
        [
            'required' => PohModel::TECH_NUCLEAR_FISSION,
            'for' => PohModel::TECH_MACROECONOMICS,
        ],
        [
            'required' => PohModel::TECH_NUCLEAR_FISSION,
            'for' => PohModel::TECH_ADVANCED_BALLISTICS,
        ],
        [
            'required' => PohModel::TECH_TRANSISTOR,
            'for' => PohModel::TECH_ADVANCED_BALLISTICS,
        ],
        [
            'required' => PohModel::TECH_TRANSISTOR,
            'for' => PohModel::TECH_COMPUTERS,
        ],
        [
            'required' => PohModel::TECH_MACROECONOMICS,
            'for' => PohModel::TECH_ECOLOGY,
        ],
        [
            'required' => PohModel::TECH_MACROECONOMICS,
            'for' => PohModel::TECH_TELECOMMUNICATIONS,
        ],
        [
            'required' => PohModel::TECH_ADVANCED_BALLISTICS,
            'for' => PohModel::TECH_TELECOMMUNICATIONS,
        ],
        [
            'required' => PohModel::TECH_ADVANCED_BALLISTICS,
            'for' => PohModel::TECH_SATELLITES,
        ],
        [
            'required' => PohModel::TECH_COMPUTERS,
            'for' => PohModel::TECH_SATELLITES,
        ],
        [
            'required' => PohModel::TECH_ECOLOGY,
            'for' => PohModel::TECH_ENVIRONMENTALISM,
        ],
        [
            'required' => PohModel::TECH_TELECOMMUNICATIONS,
            'for' => PohModel::TECH_ENVIRONMENTALISM,
        ],
        [
            'required' => PohModel::TECH_TELECOMMUNICATIONS,
            'for' => PohModel::TECH_ROBOTICS,
        ],
        [
            'required' => PohModel::TECH_SATELLITES,
            'for' => PohModel::TECH_ROBOTICS,
        ],
        [
            'required' => PohModel::TECH_SATELLITES,
            'for' => PohModel::TECH_GUIDANCE_SYSTEMS,
        ],
        [
            'required' => PohModel::TECH_ENVIRONMENTALISM,
            'for' => PohModel::TECH_COMPOSITES,
        ],
        [
            'required' => PohModel::TECH_ROBOTICS,
            'for' => PohModel::TECH_COMPOSITES,
        ],
        [
            'required' => PohModel::TECH_ROBOTICS,
            'for' => PohModel::TECH_MICROCHIPS,
        ],
        [
            'required' => PohModel::TECH_ROBOTICS,
            'for' => PohModel::TECH_LASERS,
        ],
        [
            'required' => PohModel::TECH_GUIDANCE_SYSTEMS,
            'for' => PohModel::TECH_LASERS,
        ],
        [
            'required' => PohModel::TECH_COMPOSITES,
            'for' => PohModel::TECH_GLOBALIZATION,
        ],
        [
            'required' => PohModel::TECH_MICROCHIPS,
            'for' => PohModel::TECH_GLOBALIZATION,
        ],
        [
            'required' => PohModel::TECH_MICROCHIPS,
            'for' => PohModel::TECH_INTERNET,
        ],
        [
            'required' => PohModel::TECH_LASERS,
            'for' => PohModel::TECH_INTERNET,
        ],
        [
            'required' => PohModel::TECH_LASERS,
            'for' => PohModel::TECH_GENETICS,
        ],
        [
            'required' => PohModel::TECH_GLOBALIZATION,
            'for' => PohModel::TECH_STEALTH,
        ],
        [
            'required' => PohModel::TECH_GLOBALIZATION,
            'for' => PohModel::TECH_FIBER_OPTICS,
        ],
        [
            'required' => PohModel::TECH_INTERNET,
            'for' => PohModel::TECH_FIBER_OPTICS,
        ],
        [
            'required' => PohModel::TECH_INTERNET,
            'for' => PohModel::TECH_PARTICLE_PHYSICS,
        ],
        [
            'required' => PohModel::TECH_GENETICS,
            'for' => PohModel::TECH_PARTICLE_PHYSICS,
        ],
        [
            'required' => PohModel::TECH_GENETICS,
            'for' => PohModel::TECH_BIOTECHNOLOGY,
        ],
        [
            'required' => PohModel::TECH_STEALTH,
            'for' => PohModel::TECH_SUPERCONDUCTORS,
        ],
        [
            'required' => PohModel::TECH_FIBER_OPTICS,
            'for' => PohModel::TECH_SUPERCONDUCTORS,
        ],
        [
            'required' => PohModel::TECH_FIBER_OPTICS,
            'for' => PohModel::TECH_CROWDSOURCING,
        ],
        [
            'required' => PohModel::TECH_PARTICLE_PHYSICS,
            'for' => PohModel::TECH_MASS_SURVEILLANCE,
        ],
        [
            'required' => PohModel::TECH_PARTICLE_PHYSICS,
            'for' => PohModel::TECH_QUANTUM_PHYSICS,
        ],
        [
            'required' => PohModel::TECH_BIOTECHNOLOGY,
            'for' => PohModel::TECH_QUANTUM_PHYSICS,
        ],
        [
            'required' => PohModel::TECH_SUPERCONDUCTORS,
            'for' => PohModel::TECH_NANOTECHNOLOGY,
        ],
        [
            'required' => PohModel::TECH_CROWDSOURCING,
            'for' => PohModel::TECH_NANOTECHNOLOGY,
        ],
        [
            'required' => PohModel::TECH_CROWDSOURCING,
            'for' => PohModel::TECH_PRIVATE_SPACE_FLIGHT,
        ],
        [
            'required' => PohModel::TECH_MASS_SURVEILLANCE,
            'for' => PohModel::TECH_PRIVATE_SPACE_FLIGHT,
        ],
        [
            'required' => PohModel::TECH_MASS_SURVEILLANCE,
            'for' => PohModel::TECH_BIOSYNTHETICS,
        ],
        [
            'required' => PohModel::TECH_QUANTUM_PHYSICS,
            'for' => PohModel::TECH_BIOSYNTHETICS,
        ],
        [
            'required' => PohModel::TECH_NANOTECHNOLOGY,
            'for' => PohModel::TECH_QUANTUM_COMPUTING,
        ],
        [
            'required' => PohModel::TECH_NANOTECHNOLOGY,
            'for' => PohModel::TECH_CYBERNETICS,
        ],
        [
            'required' => PohModel::TECH_PRIVATE_SPACE_FLIGHT,
            'for' => PohModel::TECH_CYBERNETICS,
        ],
        [
            'required' => PohModel::TECH_PRIVATE_SPACE_FLIGHT,
            'for' => PohModel::TECH_WEAPONIZED_LASERS,
        ],
        [
            'required' => PohModel::TECH_BIOSYNTHETICS,
            'for' => PohModel::TECH_WEAPONIZED_LASERS,
        ],
        [
            'required' => PohModel::TECH_QUANTUM_COMPUTING,
            'for' => PohModel::TECH_ARTIFICIAL_INTELLIGENCE,
        ],
        [
            'required' => PohModel::TECH_CYBERNETICS,
            'for' => PohModel::TECH_ARTIFICIAL_INTELLIGENCE,
        ],
        [
            'required' => PohModel::TECH_CYBERNETICS,
            'for' => PohModel::TECH_CRYOGENICS,
        ],
        [
            'required' => PohModel::TECH_CYBERNETICS,
            'for' => PohModel::TECH_NUCLEAR_FUSION,
        ],
        [
            'required' => PohModel::TECH_WEAPONIZED_LASERS,
            'for' => PohModel::TECH_NUCLEAR_FUSION,
        ],
        [
            'required' => PohModel::TECH_ARTIFICIAL_INTELLIGENCE,
            'for' => PohModel::TECH_NEURAL_NETWORKS,
        ],
        [
            'required' => PohModel::TECH_CRYOGENICS,
            'for' => PohModel::TECH_NEURAL_NETWORKS,
        ],
        [
            'required' => PohModel::TECH_CRYOGENICS,
            'for' => PohModel::TECH_RAILGUNS,
        ],
        [
            'required' => PohModel::TECH_NUCLEAR_FUSION,
            'for' => PohModel::TECH_RAILGUNS,
        ],
        [
            'required' => PohModel::TECH_NEURAL_NETWORKS,
            'for' => PohModel::TECH_FUSION_PROPULSION,
        ],
        [
            'required' => PohModel::TECH_NEURAL_NETWORKS,
            'for' => PohModel::TECH_NANOBOTS,
        ],
        [
            'required' => PohModel::TECH_RAILGUNS,
            'for' => PohModel::TECH_NANOBOTS,
        ],
        [
            'required' => PohModel::TECH_RAILGUNS,
            'for' => PohModel::TECH_CLONING,
        ],
        [
            'required' => PohModel::TECH_FUSION_PROPULSION,
            'for' => PohModel::TECH_FUTURE_TECH,
        ],
        [
            'required' => PohModel::TECH_NANOBOTS,
            'for' => PohModel::TECH_FUTURE_TECH,
        ],
        [
            'required' => PohModel::TECH_CLONING,
            'for' => PohModel::TECH_FUTURE_TECH,
        ],
    ];
}
