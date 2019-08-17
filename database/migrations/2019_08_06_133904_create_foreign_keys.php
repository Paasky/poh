<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('hexes', function(Blueprint $table) {
			$table->foreign('map_id')->references('id')->on('maps')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('hexes', function(Blueprint $table) {
			$table->foreign('biome_id')->references('id')->on('biomes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('hexes', function(Blueprint $table) {
			$table->foreign('terrain_id')->references('id')->on('terrains')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('hexes', function(Blueprint $table) {
			$table->foreign('landscape_id')->references('id')->on('landscapes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('hexes', function(Blueprint $table) {
			$table->foreign('feature_id')->references('id')->on('features')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('hexes', function(Blueprint $table) {
			$table->foreign('resource_id')->references('id')->on('resources')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('hexes', function(Blueprint $table) {
			$table->foreign('player_id')->references('id')->on('players')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('terrains', function(Blueprint $table) {
			$table->foreign('biome_id')->references('id')->on('biomes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cities', function(Blueprint $table) {
			$table->foreign('city_type_id')->references('id')->on('city_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cities', function(Blueprint $table) {
			$table->foreign('player_id')->references('id')->on('players')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cities', function(Blueprint $table) {
			$table->foreign('hex_id')->references('id')->on('hexes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('improvements', function(Blueprint $table) {
			$table->foreign('improvement_type_id')->references('id')->on('improvement_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('improvements', function(Blueprint $table) {
			$table->foreign('hex_id')->references('id')->on('hexes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('improvement_types', function(Blueprint $table) {
			$table->foreign('technology_id')->references('id')->on('technologies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('promotion_types', function(Blueprint $table) {
			$table->foreign('technology_id')->references('id')->on('technologies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('units', function(Blueprint $table) {
			$table->foreign('unit_type_id')->references('id')->on('unit_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('units', function(Blueprint $table) {
			$table->foreign('player_id')->references('id')->on('players')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('units', function(Blueprint $table) {
			$table->foreign('hex_id')->references('id')->on('hexes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('promotions', function(Blueprint $table) {
			$table->foreign('promotion_type_id')->references('id')->on('promotion_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('promotions', function(Blueprint $table) {
			$table->foreign('unit_id')->references('id')->on('units')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('players', function(Blueprint $table) {
			$table->foreign('civilization_id')->references('id')->on('civilizations')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('players', function(Blueprint $table) {
			$table->foreign('game_id')->references('id')->on('games')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('games', function(Blueprint $table) {
			$table->foreign('map_id')->references('id')->on('maps')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->foreign('event_type_id')->references('id')->on('event_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->foreign('hex_id')->references('id')->on('hexes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('known_technologies', function(Blueprint $table) {
			$table->foreign('technology_id')->references('id')->on('technologies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('known_technologies', function(Blueprint $table) {
			$table->foreign('player_id')->references('id')->on('players')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('hex_cultures', function(Blueprint $table) {
			$table->foreign('player_id')->references('id')->on('players')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('hex_cultures', function(Blueprint $table) {
			$table->foreign('hex_id')->references('id')->on('hexes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('buildings', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('buildings', function(Blueprint $table) {
			$table->foreign('building_type_id')->references('id')->on('building_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('unit_trainings', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('unit_trainings', function(Blueprint $table) {
			$table->foreign('unit_type_id')->references('id')->on('unit_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('unit_trainings', function(Blueprint $table) {
			$table->foreign('player_id')->references('id')->on('players')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('districts', function(Blueprint $table) {
			$table->foreign('district_type_id')->references('id')->on('district_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('districts', function(Blueprint $table) {
			$table->foreign('hex_id')->references('id')->on('hexes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('yields', function(Blueprint $table) {
			$table->foreign('biome_id')->references('id')->on('biomes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('yields', function(Blueprint $table) {
			$table->foreign('terrain_id')->references('id')->on('terrains')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('yields', function(Blueprint $table) {
			$table->foreign('landscape_id')->references('id')->on('landscapes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('yields', function(Blueprint $table) {
			$table->foreign('feature_id')->references('id')->on('features')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('yields', function(Blueprint $table) {
			$table->foreign('resource_id')->references('id')->on('resources')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('turns', function(Blueprint $table) {
			$table->foreign('game_id')->references('id')->on('games')
						->onDelete('restrict')
						->onUpdate('cascade');
		});
		Schema::table('player_turns', function(Blueprint $table) {
			$table->foreign('turn_id')->references('id')->on('turns')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('player_turns', function(Blueprint $table) {
			$table->foreign('player_id')->references('id')->on('players')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('actions', function(Blueprint $table) {
			$table->foreign('player_turn_id')->references('id')->on('player_turns')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('resource_usages', function(Blueprint $table) {
			$table->foreign('consume_resource_id')->references('id')->on('resources')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('resource_usages', function(Blueprint $table) {
			$table->foreign('create_resource_id')->references('id')->on('resources')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('resource_usages', function(Blueprint $table) {
			$table->foreign('require_resource_id')->references('id')->on('resources')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('technology_requirements', function(Blueprint $table) {
			$table->foreign('required_id')->references('id')->on('technologies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('technology_requirements', function(Blueprint $table) {
			$table->foreign('for_id')->references('id')->on('technologies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('promotion_requirements', function(Blueprint $table) {
			$table->foreign('required_id')->references('id')->on('promotion_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('promotion_requirements', function(Blueprint $table) {
			$table->foreign('for_id')->references('id')->on('promotion_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('building_requirements', function(Blueprint $table) {
			$table->foreign('required_id')->references('id')->on('building_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('building_requirements', function(Blueprint $table) {
			$table->foreign('for_id')->references('id')->on('building_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('hexes', function(Blueprint $table) {
			$table->dropForeign('hexes_map_id_foreign');
		});
		Schema::table('hexes', function(Blueprint $table) {
			$table->dropForeign('hexes_biome_id_foreign');
		});
		Schema::table('hexes', function(Blueprint $table) {
			$table->dropForeign('hexes_terrain_id_foreign');
		});
		Schema::table('hexes', function(Blueprint $table) {
			$table->dropForeign('hexes_landscape_id_foreign');
		});
		Schema::table('hexes', function(Blueprint $table) {
			$table->dropForeign('hexes_feature_id_foreign');
		});
		Schema::table('hexes', function(Blueprint $table) {
			$table->dropForeign('hexes_resource_id_foreign');
		});
		Schema::table('hexes', function(Blueprint $table) {
			$table->dropForeign('hexes_player_id_foreign');
		});
		Schema::table('terrains', function(Blueprint $table) {
			$table->dropForeign('terrains_biome_id_foreign');
		});
		Schema::table('cities', function(Blueprint $table) {
			$table->dropForeign('cities_city_type_id_foreign');
		});
		Schema::table('cities', function(Blueprint $table) {
			$table->dropForeign('cities_player_id_foreign');
		});
		Schema::table('cities', function(Blueprint $table) {
			$table->dropForeign('cities_hex_id_foreign');
		});
		Schema::table('improvements', function(Blueprint $table) {
			$table->dropForeign('improvements_improvement_type_id_foreign');
		});
		Schema::table('improvements', function(Blueprint $table) {
			$table->dropForeign('improvements_hex_id_foreign');
		});
		Schema::table('improvement_types', function(Blueprint $table) {
			$table->dropForeign('improvement_types_technology_id_foreign');
		});
		Schema::table('promotion_types', function(Blueprint $table) {
			$table->dropForeign('promotion_types_technology_id_foreign');
		});
		Schema::table('units', function(Blueprint $table) {
			$table->dropForeign('units_unit_type_id_foreign');
		});
		Schema::table('units', function(Blueprint $table) {
			$table->dropForeign('units_player_id_foreign');
		});
		Schema::table('units', function(Blueprint $table) {
			$table->dropForeign('units_hex_id_foreign');
		});
		Schema::table('promotions', function(Blueprint $table) {
			$table->dropForeign('promotions_promotion_type_id_foreign');
		});
		Schema::table('promotions', function(Blueprint $table) {
			$table->dropForeign('promotions_unit_id_foreign');
		});
		Schema::table('players', function(Blueprint $table) {
			$table->dropForeign('players_civilization_id_foreign');
		});
		Schema::table('players', function(Blueprint $table) {
			$table->dropForeign('players_game_id_foreign');
		});
		Schema::table('games', function(Blueprint $table) {
			$table->dropForeign('games_map_id_foreign');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->dropForeign('events_event_type_id_foreign');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->dropForeign('events_hex_id_foreign');
		});
		Schema::table('known_technologies', function(Blueprint $table) {
			$table->dropForeign('known_technologies_technology_id_foreign');
		});
		Schema::table('known_technologies', function(Blueprint $table) {
			$table->dropForeign('known_technologies_player_id_foreign');
		});
		Schema::table('hex_cultures', function(Blueprint $table) {
			$table->dropForeign('hex_cultures_player_id_foreign');
		});
		Schema::table('hex_cultures', function(Blueprint $table) {
			$table->dropForeign('hex_cultures_hex_id_foreign');
		});
		Schema::table('buildings', function(Blueprint $table) {
			$table->dropForeign('buildings_city_id_foreign');
		});
		Schema::table('buildings', function(Blueprint $table) {
			$table->dropForeign('buildings_building_type_id_foreign');
		});
		Schema::table('unit_trainings', function(Blueprint $table) {
			$table->dropForeign('unit_trainings_city_id_foreign');
		});
		Schema::table('unit_trainings', function(Blueprint $table) {
			$table->dropForeign('unit_trainings_unit_type_id_foreign');
		});
		Schema::table('unit_trainings', function(Blueprint $table) {
			$table->dropForeign('unit_trainings_player_id_foreign');
		});
		Schema::table('districts', function(Blueprint $table) {
			$table->dropForeign('districts_district_type_id_foreign');
		});
		Schema::table('districts', function(Blueprint $table) {
			$table->dropForeign('districts_hex_id_foreign');
		});
		Schema::table('yields', function(Blueprint $table) {
			$table->dropForeign('yields_biome_id_foreign');
		});
		Schema::table('yields', function(Blueprint $table) {
			$table->dropForeign('yields_terrain_id_foreign');
		});
		Schema::table('yields', function(Blueprint $table) {
			$table->dropForeign('yields_landscape_id_foreign');
		});
		Schema::table('yields', function(Blueprint $table) {
			$table->dropForeign('yields_feature_id_foreign');
		});
		Schema::table('yields', function(Blueprint $table) {
			$table->dropForeign('yields_resource_id_foreign');
		});
		Schema::table('turns', function(Blueprint $table) {
			$table->dropForeign('turns_game_id_foreign');
		});
		Schema::table('player_turns', function(Blueprint $table) {
			$table->dropForeign('player_turns_turn_id_foreign');
		});
		Schema::table('player_turns', function(Blueprint $table) {
			$table->dropForeign('player_turns_player_id_foreign');
		});
		Schema::table('actions', function(Blueprint $table) {
			$table->dropForeign('actions_player_turn_id_foreign');
		});
		Schema::table('resource_usages', function(Blueprint $table) {
			$table->dropForeign('resource_usages_consume_resource_id_foreign');
		});
		Schema::table('resource_usages', function(Blueprint $table) {
			$table->dropForeign('resource_usages_create_resource_id_foreign');
		});
		Schema::table('resource_usages', function(Blueprint $table) {
			$table->dropForeign('resource_usages_require_resource_id_foreign');
		});
		Schema::table('technology_requirements', function(Blueprint $table) {
			$table->dropForeign('technology_requirements_required_id_foreign');
		});
		Schema::table('technology_requirements', function(Blueprint $table) {
			$table->dropForeign('technology_requirements_for_id_foreign');
		});
		Schema::table('promotion_requirements', function(Blueprint $table) {
			$table->dropForeign('promotion_requirements_required_id_foreign');
		});
		Schema::table('promotion_requirements', function(Blueprint $table) {
			$table->dropForeign('promotion_requirements_for_id_foreign');
		});
		Schema::table('building_requirements', function(Blueprint $table) {
			$table->dropForeign('building_requirements_required_id_foreign');
		});
		Schema::table('building_requirements', function(Blueprint $table) {
			$table->dropForeign('building_requirements_for_id_foreign');
		});
	}
}
